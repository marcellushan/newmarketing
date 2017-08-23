<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\StatusUpdate;
use App\Mail\AdminStatusUpdate;
use Illuminate\Http\Request;

use App\Comments;
use App\Clients;
use App\User;

use URL;

class CommentsController extends Controller
{
    public function update(Request $request)
    {
//      dd($request);
//       echo $request->services_id;
        $service= $request->service;
        $service_name = ltrim($service, 'App\\');
        $media_name = $request->service_name;
        $data = $service::find($request->services_id);
        $data->status = $request->status;
        $data->save();
//       dd($data);
//       $comment = '';

        if($request->file('image')) {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
        }



        $user = Customer::find($request->user_id);
//       dd($user);
        $comment = new Comments;
        $comment->services_id = $request->services_id;
        $comment->service = $request->service;
        $comment->status = $request->status;
        if(@auth()->user) {
            $comment->username = auth()->user()->name;
        } else {
            $comment->username = "Customer";
        }
//        $comment->username = $user->name;
        if($request->comment) {
            $comment->comment = $request->comment;
        }
        ($request->file('image') ? $comment->image=URL::to('/') . "/uploads/" . $myPath : "");
        $comment->save();
        $status = $request->status;
////       Session::put('press_release',2);
//       dd($request);

//       $client = Clients::find($request->clients_id);

//        dd($request);
        \Mail::to($user->email)->send(new StatusUpdate($status, $data, $comment,
            $request->view_folder, $media_name));
        if($request->view_folder == 'design_printing') {
            $mailgroup = 'PRINTING';
        } elseif($request->view_folder == 'photography' || $request->view_folder == 'videography') {
            $mailgroup = 'GRAPHY';
        } elseif ($request->view_folder == 'event') {
            $mailgroup = 'EVERYONE';
        }  else {
            $mailgroup = 'MARKETING';
        }

        $to = explode(',', env($mailgroup));
//       dd($media_name);

        \Mail::to($to)
            ->cc('mhannah@highlands.edu')
            ->send(new AdminStatusUpdate($status, $data, $comment, $request->view_folder, $media_name));

        if($request->user) {
            return view('comment');
        }
        return redirect('service/' . $service_name);


//       $url = $this::VIEW_FOLDER . '/' . Session::get('id');
//       $which_mail = '\\App\\Mail\\' . $this::MAIL;
//       if($this::VIEW_FOLDER == 'design_printing') {
//           $mailgroup = 'PRINTING';
//       } elseif($this::VIEW_FOLDER == 'photography' || $this::VIEW_FOLDER == 'videography') {
//           $mailgroup = 'GRAPHY';
//       } elseif ($this::VIEW_FOLDER == 'event') {
//           $mailgroup = 'EVERYONE';
//       }  else {
//           $mailgroup = 'MARKETING';
//       }
//
//       $to = explode(',', env($mailgroup));
//       \Mail::to($to)
//           ->cc('mhannah@highlands.edu')
//           ->send(new $which_mail());


    }
}
