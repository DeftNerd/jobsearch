<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Input;
use Session;
use Redirect;
use App\Company as Company;
use App\Job as Job;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $data = Company::all();
      return view('backend.company.index', ['companies' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $data = [
       'name' => $request->get('name'),
       'url' => $request->get('url'),
       'location' => $request->get('location'),
       'notes_public' => $request->get('notes_public'),
       'notes_private' => $request->get('notes_private'),
       ];

       Company::create($data);

       return redirect('/admin/company')->withFlashSuccess("Company Added.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $data = Company::findBySlug($id);
      $jobs = Job::whereCompanyId($data->id)->get();

      return view('backend.company.show', ['company' => $data, 'jobs' => $jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $data = Company::findBySlug($id);

      return view('backend.company.edit', ['company' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      // validate
      $rules = array(
        'name'       => 'required'
      );

      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
        return Redirect::to('/admin/company/' . $id . '/edit')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
      } else {
        // store
        $data = Company::findBySlug($id);
        $data->name           = Input::get('name');
        $data->url            = Input::get('url');
        $data->location       = Input::get('location');
        $data->notes_public   = Input::get('notes_public');
        $data->notes_private  = Input::get('notes_private');
        $data->save();

        return redirect('/admin/company')->withFlashSuccess("Company Edited.");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $data = Company::findBySlug($id);
      $data->delete();

       // redirect
       return redirect('/admin/company')->withFlashSuccess("Company Deleted.");
    }
}
