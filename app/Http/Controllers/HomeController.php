<?php

namespace App\Http\Controllers;

use App\Profile;
use App\SiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pageTitle = 'Dashboard';
        return view('home', compact('pageTitle'));
    }
    public function show($id, $slug)
    {
        $profile = Profile::where('id', $id)->firstOrFail();
        return view('site.pages.profile.frontend.show', compact('profile'));
    }
    public function sitesettings()
    {
        $pageTitle = 'Site Settings';
        $setting = SiteSetting::where('id', 1)->firstOrFail();
        return view('site.pages.settings.index', compact('setting'));
    }
    public function updatesettings(Request $request)
    {
        $setting = SiteSetting::where('id', 1)->firstOrFail();
        $this->validate($request, [
            'sitetitle'     => 'required',
            'metatitle'  => 'required',
            'metadesc'  => 'required',
            'metakey'  => 'required',
            'footertext'  => 'required',
        ]);
        $input = $request->all();
        $setting->fill($input);
        $setting->save();
        return redirect()->route('settings.index')
                        ->with('success','Site Settings updated successfully!');
    }
}
