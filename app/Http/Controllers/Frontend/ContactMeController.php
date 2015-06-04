<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactMeFormRequest;
use Illuminate\Http\Request;

class ContactMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      return view('frontend.contactme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ContactMeFormRequest $request)
    {
      $data = [
       'name' => $request->get('name'),
       'email' => $request->get('email'),
       'user_message' => $request->get('message'),
       ];

       \Mail::send('emails.contactme', $data, function($message)
       {
         $message->from(env('MAIL_FROM'));
         $message->to(env('MAIL_FROM'), env('MAIL_NAME'));
         $message->subject('JobSearch Message');
       });

       return redirect()->route('contactme')->withFlashSuccess("Your message was successfully sent.");
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
