<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\ServiceRequests;
use DB;

class AdminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('welcome');
        $service_requests = (ServiceRequests::orderBy('created_at', 'desc')->get());

//        $service_requests= DB::table('service_requests')->join('users', 'users.id', '=', 'service_requests.user_id')
        $service_requests= DB::table('users')->join('service_requests', 'users.id', '=', 'service_requests.user_id')
//            ->where($this::TABLE_NAME . '.status','=', 'Received')
            ->orderBy('service_requests.created_at', 'desc')
            ->get();

//        dd($service_requests);
        return view('service_request.list')->with(compact('service_requests'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ServiceRequests::where('id', '=', $id)->orderBy('created_at', 'desc')->first();
        $user_info = User::find($data->user_id);
        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        (@$data->designPrinting ? $design_printing = $data->designPrinting : $design_printing = '');
        (@$data->photography ? $photography = $data->photography : $photography = '');
        (@$data->videography ? $videography = $data->videography : $videography = '');
        (@$data->paidAdvertising ? $paid_advertising = $data->paidAdvertising : $paid_advertising = '');
        (@$data->presentation ? $presentation = $data->presentation : $presentation = '');
        (@$data->socialMedia ? $social_media = $data->socialMedia : $social_media = '');
        (@$data->event ? $event = $data->event : $event = '');
//        dd($photography);
        return view('service_request.admin_show')->with(compact('data','user_info','press_release', 'design_printing','photography',
            'videography','paid_advertising','presentation','social_media','event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
