<?php

namespace App\Http\Controllers;
use App\Employee;
use DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
    	$data['employees'] = Employee::all();
    	return view('index', $data);
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'emoplyee_no'			=>	$request->emoplyee_no,
    				'name'					=>	$request->name,
    				'department'			=>	$request->department,
    				'company'				=>	$request->company,
    				'salary'				=>	$request->salary,
    				'joining_date'			=>	$request->joining_date,
    				'termination_date'		=>	$request->termination_date,
    				'designation_id'		=>	$request->designation_id,
    			);

			DB::table('employees')
				->where('id', $request->id)
				->update($data);
    		}

    		if($request->action == 'delete')
    		{
    			DB::table('employees')
    				->where('id', $request->id)
    				->delete();
    		}
    		
    		return response()->json($request);
    	}
    }
}
