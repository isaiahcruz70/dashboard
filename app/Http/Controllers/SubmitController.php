<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SubmitController extends Controller
{
    public function submit()
    {
        $submit = DB::table('submit-queue')->get();

        return view('queue',
        [
            'submit-queue' => $submit
        ]);
    }
    public function request()
    {
        return view('queue');
    }
}