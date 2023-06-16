<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Spouse;
use App\Models\Application;
use App\Models\document;

class ApplicationController extends Controller
{
    public function manage()
    {
        $datas = Application::paginate(3);
        return view('manageMarReq.manage', compact('datas'));
    }

    public function create()
    {
        $datas = Application::paginate(3);
        return view('manageMarReq.manage', compact('datas'));
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
        ]);

        $app = new Applicant();
        $app->fill($applicant);
        $app->save();
        // Applicant::create($applicant);
        $spouse = ([
            'id' => $request->id,
        ]);
        $sp = new Spouse();
        $sp->fill($spouse);
        $sp->save();

        $application = ([
            'sp_id' => $sp->id
        ]);
        Application::create($application);
        // dd($app,$sp,$consultation,$spouse);

        return redirect()->route('user.application.manage')
            ->with('success', "Successfully Posted!");
    }

    public function createForm()
    {
        return view('file-upload');
    }

    public function document(Request $req)
    {
        $req->validate([
            'documents' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new document;
        if ($req->payments()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->payments('document')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->paymentProof = '/storage/' . $filePath;
            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('document', $fileName);
        }
    }
}
