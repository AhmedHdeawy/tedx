<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Excel;

use App\Visitor;
use App\Http\Requests\ApplicationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function application(Request $request)
    {
        return view('application');
    }

    public function storeApplication(ApplicationRequest $request)
    {
        $request['code'] = str_random(8);
        $visitor = Visitor::create($request->all());

        Mail::to($visitor->email)->send(new ApplicationMail($visitor));

        return redirect()->back()->with('status', 'success');
    }

    public function admin(Request $request)
    {
        $visitors = Visitor::orderBy('id', 'desc')->get();

        return view('admin', compact('visitors'));
    }

    public function excel(Request $request)
    {
         $visitors = Visitor::get()->toArray();
         // dd($visitors);
        return Excel::create('application', function($excel) use ($visitors) {
            $excel->sheet('attendeces', function($sheet) use ($visitors)
            {
                $sheet->fromArray($visitors);
            });
        })->download('xls');
    }
}
