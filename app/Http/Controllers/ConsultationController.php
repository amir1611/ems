<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\Spouse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reference;

class ConsultationController extends Controller
{
    //
    public function manage()
    {
        $datas = Consultation::with('staff','consultant','applicant','spouse')->paginate(3);
        // dd($datas);
        return view('manageConsultation.manage', compact('datas'));
    }

    public function userManage()
    {
        $datas = Consultation::with('staff','consultant','applicant','spouse')->paginate(9);
        // dd($datas);
        return view('manageConsultation.userManage', compact('datas'));
    }

    public function create()
    {
        $locations = Reference::where('name', 'location')->orderBy('code')->get();
        $slots = Reference::where('name', 'slot')->orderBy('code')->get();
        $user =  Auth()->user();
        return view('manageConsultation.create', compact('user','locations','slots'));
    }
    
    public function store(Request $request)
    {
        $user = ([
            'name' => $request->applicant_name,
            'email' =>  $request->applicant_email,
            // 'ic' => $request->applicant_IcNum,
            // 'gender' => $request->applicant_gender,
            'contact' => $request->applicant_phoneNo,
        ]);
        // dd($user);
        User::where('id', Auth()->user()->id)->update($user);

        $applicant = Applicant::where('user_id', Auth()->user()->id)->first();
        $applicant->birthdate = $request->applicant_birthdate;
        $applicant->nationality = $request->applicant_nationality;
        $applicant->save();
        // Applicant::create($applicant);
        $existingSpouse = Spouse::where('ic', $request->spouse_IcNum)->first();

        if ($existingSpouse) {
            $spouse = $existingSpouse;
        } else {
            $spouse = new Spouse();
            $spouse->ic = $request->spouse_IcNum;
        }
    
        $spouse->name = $request->spouse_name;
        $spouse->birthdate = $request->spouse_birthdate;
        $spouse->email = $request->spouse_email;
        $spouse->gender = $request->spouse_gender;
        $spouse->phonenumber = $request->spouse_phoneNo;
        $spouse->nationality = $request->spouse_nationality;
        $spouse->save();
    
        $consultation = ([
        'sp_id'=>$spouse->id,
        'app_id'=>$applicant->id,
        'date'=> $request->date,
        'location'=> $request->location,
        'slot'=> $request->slot,
        'description'=> $request->description,
        'document'=> $request->document,
        ]);
        Consultation::create($consultation);
        // dd($app,$sp,$consultation,$spouse);

        return redirect()->route('user.consultation.manage')
        ->with('success', "consultation Successfully Posted!");
    }

    public function edit($id)
    {
        $data = Consultation::with('spouse','applicant.user')->find($id)->toArray();
        $consultants = Consultant::all();
        // dd($data);
        // $role = Reference::where('code', $data['ref_role_id'])
        //     ->where('name', 'roles')
        //     ->get();

        return view('manageConsultation.edit1', compact('data','consultants','id'));
    }

    public function update(Request $request, $id)
    {
        Consultation::find($id)->update($request->all());

        return redirect()->route('staff.consultation.manage')
            ->with('success', "User Successfully Updated");
    }
}
