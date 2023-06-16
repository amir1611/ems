<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\User;
use App\Models\Prep_course;
use App\Models\payment;
use App\Models\applicantList;

class PrepCourseController extends Controller
{

    public function manage()
    {
        $datas = Prep_course::paginate(3);
        return view('managePrepCourse.manage', compact('datas'));
    }

    public function create()
    {
        $user =  Auth()->user();
        return view('managePrepCourse.create', compact('user'));
    }

    public function store(Request $request)
    {
        // $user = ([
        // 'name' => $request->applicant_name,
        //     'email' =>  $request->applicant_email,
        //     'ic' => $request->applicant_IcNum,
        //     'gender' => $request->applicant_gender,
        //     'contact' => $request->applicant_phoneNo,
        // ]);
        // User::where('id', Auth()->user()->id)->update($user);

        // User::find(Auth()->user())->update($user);
        $applicant = ([
            'user_id' => Auth()->user()->id,
            'birthdate' => $request->applicant_birthdate,
            'nationality' => $request->applicant_nationality,
            'houseaddress' => $request->applicant_houseaddress
        ]);

        $app = new Applicant();
        $app->fill($applicant);
        $app->save();

        return redirect()->route('user.prepCourse.manage')
            ->with('success', "Successfully Posted!");
    }

    // public function createForm()
    // {
    //     return view('payment');
    // }

    public function payment(Request $req)
    {
        $req->validate([
            'payments' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new payment;
        if ($req->payments()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->payments('payments')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->paymentProof = '/storage/' . $filePath;
            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('payment', $fileName);
        }
    }

    function show()
    {
        $data = applicantList::all();
        return view('applicantList', ['list' => $data]);
    }
}
