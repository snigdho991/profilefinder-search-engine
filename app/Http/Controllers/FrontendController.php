<?php

namespace App\Http\Controllers;

use App\Profile;
use App\ProfileRequest;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
public function showProfile($id, $slug)
{
	$profile = Profile::where('id', $id)->firstOrFail();

	return view('site.pages.show-profile')->with('profile', $profile);
}

public function storeRequest(Request $request)
{
	if($request->isfield != 1){
		$this->validate($request, [
			'name' => 'required|max:255',
			'address' => 'required|max:255',
			'state' => 'required|max:255',
			'city' => 'required|max:255',
			'zipcode' => 'required|max:255',
			'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
			'country' => 'required|max:255',
			// 'color' => 'required',
			'photo' => 'required',
			'email' => 'required|email|unique:profile_requests,email',
			'gender' => 'required',
			'isfield' => 'required',
			'tag' => 'required',
			// 'date_of_birth' => 'required',
		]);
	} else {
		$this->validate($request, [
			'name' => 'required|max:255',
			'address' => 'required|max:255',
			'state' => 'required|max:255',
			'city' => 'required|max:255',
			'zipcode' => 'required|max:255',
			'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
			'country' => 'required|max:255',
			'photo' => 'required',
			'email' => 'required|email|unique:profiles,email',
			'isfield' => 'required',
			'tag' => 'required',
		]);
	}

$input = $request->all();

$user = ProfileRequest::create($input);
$user->date_of_birth=$input['date_of_birth'];

$featured = $input['photo'];
$featured_new_name = time().$featured->getClientOriginalName();
$featured->move('uploads/requests', $featured_new_name);
$user->photo = 'uploads/requests/'.$featured_new_name;

$user->save();

return redirect()->back()
->with('success','Profile request submitted successfully');
}
}