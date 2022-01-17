<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\LogActivity;

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
        return view('index');
    }
     public function myTestAddToLog()
    {
        \Helper::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {  $data['title'] = "Logs";
        $logs = \Helper::logActivityLists();
        return view('logActivity',compact('logs'));
    }
    public function logsdelete($id)
    {
        $log = LogActivity::findOrFail($id);
        $log->delete();
        return back();
    }
}
