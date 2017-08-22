<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Mail\ClientMail;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Session;


class ServiceController extends Controller
{

    public function index()
    {
//        $user = Auth::user();
        if(Session::get('press_release')==1) {
            return redirect('press_release/create');
        }
        if(Session::get('design_printing')==1) {
            return redirect('design_printing/create');
        }
        if(Session::get('photography')==1) {
            return redirect('photography/create');
        }
        if(Session::get('videography')==1) {
            return redirect('videography/create');
        }
        if(Session::get('paid_advertising')==1) {
            return redirect('paid_advertising/create');
        }
        if(Session::get('presentation')==1) {
            return redirect('presentation/create');
        }
        if(Session::get('social_media')==1) {
            return redirect('social_media/create');
        }
        if(Session::get('event')==1) {
            return redirect('event/create');
        }
//        \Mail::to('mhannah@highlands.edu')->send(new ClientMail());
//        return view('thankyou');
        return redirect('service_request/thank_you/' . Session::get('id'));
//        return redirect()->route('clients', [Session::get('id')]);
    }

    public function testMail()
    {
        $data = Clients::find(3);
//        echo $data->email;
//        dd($data);
//        App/Clients::
        $which_mail = '\\App\\Mail\\MarketingRequest';
        \Mail::to($data->email)->send(new $which_mail());
//        \Mail::to('mhannah@highlands.edu')->send(new \App\Mail\MarketingRequest());
    }

    public function byService()
    {
//        return view('services');
        $data = "marc";
//        return view('test');
        return view('test')->with(compact('data'));

    }

    public function servicesList()
    {
        return view('services_list');
    }

    public function serviceName($service)
    {
        if ($service == 'PressRelease') {
            return redirect('press_release');
        }

        if ($service == 'DesignPrinting') {
            return redirect('design_printing');
        }

        if ($service == 'Photo') {
            return redirect('photography');
        }

        if ($service == 'Video') {
            return redirect('videography');
        }

        if ($service == 'PaidAdvertising') {
            return redirect('paid_advertising');
        }

        if ($service == 'Presentation') {
            return redirect('presentation');
        }

        if ($service == 'SocialMedia') {
            return redirect('social_media');
        }

        if ($service == 'Event') {
            return redirect('event');
        }
    }


}
