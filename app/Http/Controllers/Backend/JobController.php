<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Input;
use Session;
use Redirect;
use App\Job as Job;

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
    public function create($company)
    {
      return view('backend.job.create', ['company_slug' => $company]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $data = [
       'company_slug' => $request->get('company_slug'),
       'title' => $request->get('title'),
       'url' => $request->get('url'),
       'location' => $request->get('location'),
       'contact_name' => $request->get('contact_name'),
       'contact_email' => $request->get('contact_email'),
       'contact_phone' => $request->get('contact_phone'),
       'description' => $request->get('description'),
       'notes_public' => $request->get('notes_public'),
       'notes_private' => $request->get('notes_private'),
       'listed_at' => $request->get('listed_at'),
       ];

       $company = Company::findBySlug($data->company_slug);

       $data->company_id = $company->id;
       
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
        //
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
