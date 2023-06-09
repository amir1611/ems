<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Reference;

class ConsultantController extends Controller
{
    //
    public function index()
    {
        return redirect()->route('staff.consultant.manage');
    }

    public function manage()
    {
        $datas = Consultant::with('location','department')->paginate(10);
        return view('manageConsultant.manage',compact('datas'));
    }

    public function userManage()
    {
        $datas = Consultant::paginate(8);
        return view('manageConsultant.userManage',compact('datas'));
    }

    public function create()
    {
        $locations = Reference::where('name', 'location')->orderBy('code')->get();
        $departments = Reference::where('name', 'department')->orderBy('code')->get();
        
        return view('manageConsultant.create', compact('locations','departments'));
    }

    public function store(Request $request)
    {
        
        Consultant::create($request->all());
        // dd($request);
        return redirect()->route('staff.consultant.manage')
            ->with('success', "consultant Successfully Added");
    }

    public function update(Request $request, $id)
    {
        Consultant::find($id)->update($request->all());
        // dd($request);
        return redirect()->route('staff.consultant.manage')
        ->with('success',"consultant Successfully Updated");

    }
    
    public function edit($id)
    {
        $consultant = Consultant::find($id)->with('location','department')->first();
        $locations = Reference::where('name', 'location')->orderBy('code')->get();
        $departments = Reference::where('name', 'department')->orderBy('code')->get();
        
        return view('manageConsultant.edit', compact('locations','departments','consultant'));

    }

    public function show($id)
    {
        $consultant = Consultant::find($id)->with('location','department')->first();
        
        return view('manageConsultant.show', compact('consultant'));
    }

    // public function destroy($id)
    // {
    //     Consultant::find($id)->delete();

    //     return response()->json(['success' => true]);
    // }
    public function destroy($id)
    {
        $consultant = Consultant::find($id);
        
        if (!$consultant) {
            return redirect()->back()->with('error', 'consultant not found.');
        }
        
        $consultant->delete();
        
        return redirect()->route('staff.consultant.manage')->with('success', 'consultant deleted successfully.');
    }
}
