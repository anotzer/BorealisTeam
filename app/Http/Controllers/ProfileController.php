<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function construct () {
        $this->middleware('auth');
    }

    public function index () {
        return view('auth.profile.index');
    }

    public function update(Request $request) {
        $input = $request->all();
        $input['phone']   = ($request->exists('phone')) ? str_replace(['+'], '', $input['phone']) : null;
        auth()->user()->update($input);
        return redirect()->back();
    }
}
