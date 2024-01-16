<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Job\Job;

class JobsController extends Controller
{
    //
    public function single($id){

        $job = Job::find($id);


        // getting related jobs

        $relatedJobs = Job::where('category_id', $job->category_id)
        ->where('id', '!=', $id)        #to prevent grabing the same job twice
        ->take(5)
        ->get();

        $relatedJobsCount = Job::where('category_id', $job->category_id)
        ->where('id', '!=', $id)        #to prevent grabing the same job twice
        ->take(5)
        ->count();

      

        return view('jobs.single', compact('job', 'relatedJobs', 'relatedJobsCount'));
    }
}
 