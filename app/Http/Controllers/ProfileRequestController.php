<?php

namespace App\Http\Controllers;

use App\ProfileRequest;
use Illuminate\Http\Request;

class ProfileRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = ProfileRequest::orderBy('id', 'desc')->paginate(10);
        ProfileRequest::where('status', null)->update(['status' => 'Pending']);
        $pageTitle = 'Request List';
        return view('site.pages.requests.backend.index', compact('profiles','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfileRequest  $profileRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileRequest $profileRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfileRequest  $profileRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileRequest $profileRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfileRequest  $profileRequest
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $profile = ProfileRequest::where('id', $id)->firstOrFail();
        $pageTitle = 'Profile Create';
        $req_id = $id;
        return view('site.pages.profile.backend.create', compact('profile','pageTitle','req_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfileRequest  $profileRequest
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        ProfileRequest::find($id)->delete();
        return redirect()->route('requests.list')
                        ->with('success','Request Profile deleted successfully');

    }

    public function updatestatus($id, $value)
    {
        $profile = ProfileRequest::where('id', $id)->firstOrFail();
        $pageTitle = 'Request List';
        $profile->status = $value;
        $profile->save();
        return redirect()->route('requests.list')
                        ->with('success','Status updated successfully');
    }
}
