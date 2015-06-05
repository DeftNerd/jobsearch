<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Input;
use Session;
use Redirect;
use Carbon\Carbon;
use App\Job as Job;
use App\Company as Company;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $data = Job::all();
      return view('backend.job.index', ['jobs' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
      $companies = Company::all()->lists('name', 'slug');
      if ($request->input('company_slug')) {
        return view('backend.job.create', ['company_slug' => $request->input('company_slug'), 'companies' => $companies]);
      } else {
        return view('backend.job.create', ['companies' => $companies]);
      }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $data = [
       'company_slug' => $request->get('company_slug'),
       'contact_email' => $request->get('contact_email'),
       'contact_name' => $request->get('contact_name'),
       'contact_phone' => $request->get('contact_phone'),
       'cover_letter' => $request->get('cover_letter'),
       'description' => $request->get('description'),
       'listed_at' => Carbon::parse($request->get('listed_at')),
       'location' => $request->get('location'),
       'notes_private' => $request->get('notes_private'),
       'notes_public' => $request->get('notes_public'),
       'resume_url' => $request->get('resume_url'),
       'stage' => $request->get('stage'),
       'title' => $request->get('title'),
       'url' => $request->get('url'),
       ];

       $company = Company::findBySlug($request->get('company_slug'));

       $data['company_id'] = $company->id;

       Job::create($data);

       return redirect('/admin/job')->withFlashSuccess("Job Added.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $data = Job::findBySlug($id);

      return view('backend.job.show', ['job' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
