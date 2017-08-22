<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;
use App\User;
use App\ServiceRequests;

class BaseController extends Controller
{
    const MEDIA_NAME = "abstract";
    const MODEL_NAME = 'abstract';
    const VIEW_FOLDER = 'abstract';
    const TABLE_NAME = 'abstract';
    const MAIL = 'abstract';

    public function __construct()
    {
            return redirect('service_request');
    }

    /**
     * Display submitted service requests categorized by Status
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $receiveds= DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
////            ->join('service_requests', 'service_requests.user_id', '=', 'users.id')
//            ->where($this::TABLE_NAME . '.status','=', 'Received')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
        $receiveds = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "Received" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

        $progresses = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "In Progress" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

        $informations = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "Awaiting Information" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

        $reviews = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "Awaiting Review" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

        $cancelleds = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "Cancelled" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

        $completes = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "Complete" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

        $feedbacks = DB::select('SELECT * FROM ' . $this::TABLE_NAME . ', service_requests, users where ' . $this::TABLE_NAME . '.status = 
        "Customer Feedback" and ' . $this::TABLE_NAME . '.service_requests_id = service_requests.id and service_requests.user_id = users.id');

//        $progresses=  DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
//            ->where($this::TABLE_NAME . '.status','=', 'In Progress')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
//        $informations=  DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
//            ->where($this::TABLE_NAME . '.status','=', 'Awaiting Information')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
//        $reviews=  DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
//            ->where($this::TABLE_NAME . '.status','=', 'Awaiting Review')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
//        $cancelleds=  DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
//            ->where($this::TABLE_NAME . '.status','=', 'Cancelled')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
//        $completes=  DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
//            ->where($this::TABLE_NAME . '.status','=', 'Complete')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
//        $datas=  DB::table($this::TABLE_NAME)->join('service_requests', $this::TABLE_NAME . '.service_requests_id', '=', 'service_requests.id')
//            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
//            ->get();
        $media_name = $this::MEDIA_NAME;
        $view_folder = $this::VIEW_FOLDER;
        return view('trim_list')->with(compact('datas','receiveds','progresses','informations', 'reviews','cancelleds','completes','feedbacks','media_name','view_folder'));
//        echo $this::TABLE_NAME;
    }

    /**
     * Show the form for creating a new service request
     * Send email to service group
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this::VIEW_FOLDER . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')) {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
        }

        $data = $request->all();
//        dd($data);
        $model_name = $this::MODEL_NAME;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        if($request->media_type) {
            $media_type = implode(", ", $request->media_type);
            $service_type->media_type = $media_type;
        }
        if($request->audience) {
            $audience = implode(", ", $request->audience);
            $service_type->audience = $audience;
        }
        if($request->advertising) {
            $advertising = implode(", ", $request->advertising);
            $service_type->advertising = $advertising;
        }
        if($request->start_time) {
            $start_time = implode(":", $request->start_time);
//            dd($start_time);
            $service_type->start_time = $start_time;
        }
        if($request->end_time) {
            $end_time = implode(":", $request->end_time);
//            dd($start_time);
            $service_type->end_time = $end_time;
        }
        if($request->date_needed) {
            $date_needed = implode("/", $request->date_needed);
//            dd($date_needed);
            $service_type->date_needed = $date_needed;
        }
        if($request->assistance) {
            $assistance = implode(", ", $request->assistance);
            $service_type->assistance = $assistance;
        }
        if($request->social) {
            $social = implode(", ", $request->social);
            $service_type->social = $social;
        }
//        $service_type->clients_id=Session::get('id');
        $service_type->service_requests_id=Session::get('id');
        $service_type->status='Received';
        ($request->file('image') ? $service_type->image=URL::to('/') . "/uploads/" . $myPath : "");
        $service_type->save();
        $comment = new Comments;
        $comment->services_id = $service_type->id;
        $comment->service = $model_name;
        $comment->status = 'Received';
        $comment->comment = "Request submitted";
        $comment->save();
        $url = $this::VIEW_FOLDER . '/' . Session::get('id');

        $which_mail = '\\App\\Mail\\' . $this::MAIL;
//        dd($which_mail);

        if($this::VIEW_FOLDER == 'design_printing') {
            $mailgroup = 'PRINTING';
        } elseif($this::VIEW_FOLDER == 'photography' || $this::VIEW_FOLDER == 'videography') {
            $mailgroup = 'GRAPHY';
        } elseif ($this::VIEW_FOLDER == 'event') {
            $mailgroup = 'EVERYONE';
        }  else {
            $mailgroup = 'MARKETING';
        }
        $to = explode(',', env($mailgroup));
        \Mail::to($to)
            ->cc('mhannah@highlands.edu')
            ->send(new $which_mail());
        Session::put($this::VIEW_FOLDER,2);
        return redirect($url);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('service_requests_id', '=', $id)->orderBy('created_at','desc')->first();
//        dd($service_type);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->get();
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        switch ($service_type->status) {
            case 1:
                $status = 'Received';
                break;
            case 2:
                $status = 'In Progress';
                break;
            case 3:
                $status = 'Awaiting Information';
                break;
            case 4:
                $status = 'Awaiting Review';
                break;
            case 5:
                $status = 'Completed';
                break;
        }
        return view('client')->with(compact('service_type', 'service','comments','service_name','view_folder','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('clients_id', '=', $id)->first();
        return view($this::VIEW_FOLDER . '.create')->with(compact('service_type'));
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
//        echo "test";
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function marcomShow($id)
    {
//        $client = Clients::find($id);
        $model_name = $this::MODEL_NAME;
//        $service_type = $model_name::where('service_requests_id', '=', $id)->first();
        $service_type = $model_name::find($id);
//        dd($service_type);
        $service_request = ServiceRequests::find($service_type->service_requests_id);
        $user = Customer::find($service_request->user_id);
//        dd($user);
//        dd($user_info);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->orderBy('created_at','desc')
            ->get();
        $last_comment = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->orderBy('created_at','desc')->first();
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        return view('admin')->with(compact('service_type', 'service','comments','last_comment','service_name','view_folder','service_request','user'));
//        return view('test.show')->with(compact('service_type', 'service','comments','service_name','view_folder'));
    }

    public function customerShow($id)
    {
        if(! session('customer_id'))
            return redirect('service_request');
        dd(session('customer_id'));
        $model_name = $this::MODEL_NAME;
//        $service_type = $model_name::where('service_requests_id', '=', $id)->first();
        $service_type = $model_name::find($id);
        $service_request = ServiceRequests::find($service_type->service_requests_id);
        $user = Customer::find($service_request->user_id);
//        dd($service_type);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->orderBy('created_at','desc')->get();
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        $status = "Received";
        return view('return')->with(compact('service_type', 'service','comments','service_name','view_folder','status','user'));
    }

    public function requestStatus($status)
    {
//        dd($string);
        $model_name = $this::MODEL_NAME;
//        $status
        $media_name = $this::MEDIA_NAME;
        $view_folder = $this::VIEW_FOLDER;
        $datas = DB::select(
            'SELECT ' .$this::TABLE_NAME .'.id, ' .$this::TABLE_NAME .'.created_at, users.name, ' .$this::TABLE_NAME .'.details 
            FROM ' .$this::TABLE_NAME .', service_requests, users 
            where ' .$this::TABLE_NAME .'.status = "'        . $status . '" and ' .$this::TABLE_NAME .'.service_requests_id = service_requests.id 
            and service_requests.user_id = users.id order by service_requests.created_at desc');
//        $service_type = $model_name::where('status', '=', $string)->get();
//        dd($status_list);
//        dd($datas);
        return view('service_request.status_list')->with(compact('datas','media_name','view_folder','status'));
    }

//    public function statusShow($id)
//    {
//        echo $id;
//       $model_name =  $this::MODEL_NAME;
//        $results = $model_name::find($id);
//        dd($results);
//    }
}
