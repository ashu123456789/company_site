<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectEnquiry;
use App\Models\IpAddress;
use Illuminate\Support\Facades\Http;

class InquiryController extends Controller
{
    public function index(Request $request)
    {
           //dd("hello");
        if($request->ajax()){
        $enquiry = ProjectEnquiry::orderBy('created_at','desc');
        return datatables()->eloquent($enquiry)->toJson();
        }
        else{
        $title = "Enquiry Manager";
        return view('admin.inquiry.index',compact('title'));
        }
    }

    public function create()
    {
        $title = "Inquiry Add";
        return view('admin.inquiry.create',compact('title'));
    }

    public function show($id)
    {
        $title = "Inquiry Details";
        $enquiry = ProjectEnquiry::where('id', $id)->first();
        $ip_check = IpAddress::where('enquiry_id',$id)->first();
        $response = Http::get('http://ip-api.com/json/'.$enquiry->ip);
        $ip_address = IpAddress::where('enquiry_id',$id)->first();
        if($ip_check == null)
        {
          $ip_addresses = new IpAddress();
          $ip_addresses->enquiry_id=$id;
          $ip_addresses->timezone = $response['timezone'];
          $ip_addresses->country = $response['country'];
          $ip_addresses->countryCode = $response['countryCode'];
          $ip_addresses->city = $response['city'];
          $ip_addresses->zip = $response['zip'];
          $ip_addresses->lat = $response['lat'];
          $ip_addresses->lon = $response['lon'];
          $ip_addresses->save();
          $ip_address = IpAddress::where('enquiry_id',$id)->first();
          return view('admin.inquiry.details', compact('enquiry','title','ip_address'));
        }
        //dd($response['timezone']);
        return view('admin.inquiry.details', compact('enquiry','title','ip_address'));
    }

    public function delete($id)
    {
        ProjectEnquiry::where('id', $id)->delete();
        echo json_encode(['status'=>1,'message'=>'Your User has been deleted']);
    }

}
