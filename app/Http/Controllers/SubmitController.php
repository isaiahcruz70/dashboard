<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmitQueue;
use DB;
class SubmitController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'rep-name' => 'required',
            'client-name' => 'required',
            'business-name' => 'required',
            'email' => 'required',
            'reason' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'vulnerability' => '',
        ]);
    }
    public function submit()
    {
        $submit = DB::table('queue')->get();

        return view('queue',
        [
            'queue' => $submit
        ]);
    }
    public function request()
    {
        return view('queue');
    }
}