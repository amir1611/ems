<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\User;
use App\Models\Prep_course;
use App\Models\payment;
use App\Models\applicantList;
use App\Models\Reference;

class PrepCourseController extends Controller
{

    public function manage()
    {
        $locations = Reference::where('name', 'location')->orderBy('code')->paginate(8);
        // $datas = Prep_course::paginate(3);
        return view('managePrepCourse.manage1', compact('locations'));
    }

    public function create($id)
    {
        $user =  Auth()->user();
        return view('managePrepCourse.create', compact('user','id'));
    }

    public function store(Request $request, $id)
    {
        $prepCourse = ([
            'user_id' => Auth()->user()->id,
            'birthdate' => $request->applicant_birthdate,
            'nationality' => $request->applicant_nationality,
            'houseaddress' => $request->applicant_houseaddress,
            'ref_location_id' => $id,
        ]);

        $pCourse = new Prep_course();
        $pCourse->fill($prepCourse);
        $pCourse->save();

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
