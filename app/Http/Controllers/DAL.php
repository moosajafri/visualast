<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DAL extends Controller
{
    
    public function insertProfileSummary(Request $request)
    {
		$method = $request->method();
		$fname = $request["fname"];
		$lname = $request["lname"];
		$title = $request["title"];
		$location = $request["location"];
		$psummary = $request["psummary"];
		$userid = Auth::id();

		$deleted = DB::delete('delete from profilesummary');
		DB::insert('INSERT INTO profilesummary (fname,lname,title,location,profile_summary,user_id) VALUES(?,?,?,?,?,?)', [$fname,$lname,$title,$location,$psummary,$userid]);
		return response()->json(['status' => "1" ]);
    }

    public function getProfileSummary(Request $request){
    	$userid = Auth::id();
    	$profilesummaryRS = DB::select('select * from profilesummary where user_id = ?', [$userid]);
		return response()->json($profilesummaryRS[0]);
    	
        
    }
}
