<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
// use App\Models\Spouse;
use App\Models\User;
use App\Models\Prep_course;

class PrepCourseController extends Controller
{
    
    public function manage()
    {
        $datas = Prep_course::paginate(3);
        return view('managePrepCourse.manage', compact('datas'));
    }

    // public function update(User $user, Request $request)
    // {   
    //     $user->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'updated_at' => now()
    //     ]);

    //     return $this->success('profile','Profile updated successfully!');
    // }

    // public function userManage()
    // {
    //     $datas = Consultation::paginate(8);
    //     return view('manageConsultation.userManage', compact('datas'));
    // }

    // public function create()
    // {
    //     $user =  Auth()->user();
    //     return view('managePrepCourse.create', compact('user'));
    // }
    
    // public function store(Request $request)
    // {
    //     $user = ([
    //         // 'name' => $request->applicant_name,
    //         'email' =>  $request->applicant_email,
    //         'ic' => $request->applicant_IcNum,
    //         'gender' => $request->applicant_gender,
    //         'contact' => $request->applicant_phoneNo,
    //     ]);
    //     User::find(Auth()->user())->update($user->all());
    //     $applicant = ([
    //         'user_id'=> Auth()->user()->id,
    //         'birthdate' => $request->applicant_birthdate,
    //         'nationality' => $request->applicant_nationality
    //     ]);

    //     $app = new Applicant();
    //     $app->fill($applicant);
    //     $app->save();
    //     Applicant::create($applicant);
    //     $spouse = ([

    //         'name' => $request->spouse_name,
    //         'birthdate' => $request->spouse_birthdate,
    //         'email' => $request->spouse_email,
    //         // 'IcNum' => $request->spouse_IcNum,
    //         'gender' => $request->spouse_gender,
    //         'phonenumber' => $request->spouse_phoneNo,
    //         'nationality' => $request->spouse_nationality

    //     ]);
    //     $sp = new Spouse();
    //     $sp->fill($spouse);
    //     $sp->save();
        // $consultation = ([
        // 'spouse_id'=>$sp->id,
        // 'applicant_id'=>$app->id,
        // 'date'=> $request->date,
        // 'slot'=> $request->slot,
        // 'document'=> $request->document,
        // ]);
        // Consultation::create($consultation);
        // dd($app,$sp,$consultation,$spouse);

        // return redirect()->route('user.consultation.manage')
        // ->with('success', "consultation Successfully Posted!");
    // }
}


