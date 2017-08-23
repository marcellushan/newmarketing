<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\ServiceRequests;
use App\User;
use App\Customer;

class ListController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Customer::find(session('customer_id'));
//        dd($user);
        $service_requests = ServiceRequests::where('user_id', '=', $user->id)->orderBy('created_at','desc')->get();
//        dd($service_requests);
        return view('list.user')->with(compact('service_requests','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::find(session('customer_id'));
        dd($customer);
//        if(\App::environment() =='local') {
//            $username = 'jjones';
//            $givenname = 'Joe';
//            $surname = 'Jones';
//            $department = 'IT';
//        } else {
//            $username = $_SESSION['nameIdentifier'];
//            $givenname = implode(" ", $_SESSION['attributes']['givenname']);
//            $surname = implode(" ", $_SESSION['attributes']['surname']);
//            $department = implode(" ", $_SESSION['attributes']['Group']);
//        }
//        $customer = Customer::firstOrCreate(['email' => $username . '@highlands.edu','name' => $givenname . ' ' . $surname, 'department' => $department]);
//        $_SESSION['customer_id'] = $customer->id;
        return view('service_request.create')->with(compact('customer'));
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
        $data = ServiceRequests::find($id);
        $user_info = Customer::find($data->user_id);
        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        (@$data->designPrinting ? $design_printing = $data->designPrinting : $design_printing = '');
        (@$data->photography ? $photography = $data->photography : $photography = '');
        (@$data->videography ? $videography = $data->videography : $videography = '');
        (@$data->paidAdvertising ? $paid_advertising = $data->paidAdvertising : $paid_advertising = '');
        (@$data->presentation ? $presentation = $data->presentation : $presentation = '');
        (@$data->socialMedia ? $social_media = $data->socialMedia : $social_media = '');
        (@$data->event ? $event = $data->event : $event = '');
//        dd($photography);
        return view('service_request.show')->with(compact('data','user_info','press_release',
            'design_printing','photography','videography','paid_advertising','presentation','social_media','event'));
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
