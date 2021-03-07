<?php

namespace App\Http\Controllers;

use App\Profile;
use Carbon\Carbon;
use App\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::orderBy('id', 'desc')->paginate(7);
        $pageTitle = 'Profile List';
        return view('site.pages.profile.backend.index', compact('profiles','pageTitle'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Profile Create';
        $req_id = null;
        $profile = new Profile;
        // dd($req_id);
        return view('site.pages.profile.backend.create', compact('profile','pageTitle','req_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|max:255',
            // 'address'     => 'required|max:255',
            // 'state'     => 'required|max:255',
            // 'city'  => 'required|max:255',
            // 'zipcode'  => 'required|max:255',
            // 'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
            // 'country'  => 'required|max:255',
            // 'color'  => 'required',
            // 'photo' => 'required',
            'tag'     => 'required|max:255',
            'email'   => 'required|email|unique:profiles,email',
            // 'gender'  => 'required',
            // 'date_of_birth'  => 'required',
        ]);
        
        $input = $request->all();
        
        
        if($request->hasFile('photo')){
            $featured = $input['photo'];
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/profiles', $featured_new_name);
            $input['photo'] = 'uploads/profiles/'.$featured_new_name;
        }
        else {
            $input['photo'] = $request->photoreq;
        }
       
        
        
        $user = Profile::create($input);
        
        $user->save();
        
        if ($input['req_id'] != null) {
            $profile = ProfileRequest::where('id', $input['req_id'])->firstOrFail();
            $profile->status = 'Approved';
            $profile->save();
        }
        

        return redirect()->route('profiles.list')
                        ->with('success','Profile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::where('id', $id)->firstOrFail();
        $pageTitle = 'Profile Details';
        return view('site.pages.profile.backend.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::where('id', $id)->firstOrFail();
        $pageTitle = 'Edit Profile Details';
        return view('site.pages.profile.backend.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $profile = Profile::where('id', $id)->firstOrFail();
        $this->validate($request, [
            'name'     => 'required|max:255',
            // 'address'     => 'required|max:255',
            // 'state'     => 'required|max:255',
            // 'city'  => 'required|max:255',
            // 'zipcode'  => 'required|max:255',
            // 'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
            // 'country'  => 'required|max:255',
            // 'color'  => 'required',
            'email' => 'required|email|max:255|unique:profiles,id,'.$profile->id,
            // 'gender'  => 'required',
            // 'date_of_birth'  => 'required',
        ]);
        
        /*
        if($request->isdob == 2)
        {
            $profile->date_of_birth  == '';
        } else if($request->isdob == 3) {
            $profile->date_of_foundation  == '';
        }
        */
        
        $input = $request->all();
        
        $profile->fill($input);
        if($request->hasFile('photo')){
            $featured = $input['photo'];
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/profiles', $featured_new_name);
            $profile->photo = 'uploads/profiles/'.$featured_new_name;
        }
        
        $profile->save();
        return redirect()->route('profiles.list')
                        ->with('success','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Profile::find($id)->delete();
        return redirect()->route('profiles.list')
                        ->with('success','Profile deleted successfully');

    }
}
