<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Incentive;

class IncentiveController extends Controller
{
    //
    public function indexInc()
    {
        return view('manageIncentive.apply');
    }

    public function view()
    {

        $data_incentive = Incentive::all();
        return view('manageIncentive.view',['data_incentive'=> $data_incentive]);

    }

    public function insert(Request $request)
	{
		Incentive::insert($request->except(['_token']));
		return redirect()->back()->with('success', 'Your application has been sent.');
	}

    public function delete($id){
        $data_incentive = Incentive::find($id);
        $data_incentive -> delete();
        return redirect('manageIncentive.view') -> with('success','Data Deleted Succesfully');
    }

    public function view2()
    {

        $data_incentive = Incentive::all();
        return view('staff.manageIncentive.update',['data_incentive'=> $data_incentive]);

    }
}
