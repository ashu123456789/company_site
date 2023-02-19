<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        //dd("hello");
        if($request->ajax()){
            $faq = Faq::orderBy('created_at','desc');
            return datatables()->eloquent($faq)->toJson();
        }
        else{
        $title = "Faq Manager";
        return view('admin.faq.index',compact('title'));
        }
    }

    public function create()
    {
        $title = "Faq Add";
        return view('admin.faq.create',compact('title'));
    }

    public function store(FaqRequest $request)
    {
            $faq = new Faq();
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->status = 1;
            $faq->save();
            return redirect()->route('admin.faqs')->with('success',' Added Faq');
    }

    public function show($id)
    {
        $title = "Faq Details";
        $faq = Faq::where('id', $id)->first();
        return view('admin.faq.details', compact('faq','title'));
    }

    public function edit($id)
    {
        $title="Edit Faq";
        $faq = Faq::where('id', $id)->first();
        return view('admin.faq.edit', compact('faq','title'));
    }

    public function update(FaqRequest $request, $id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = 1;
        $faq->save();
        return redirect()->route('admin.faqs')->with('success','Update Successfully');
    }

    public function status($id, $status)
    {
        $faq = Faq::where('id',$id)->first();
        
        $status = ($status == "true")? 1: 0;
        $result = $faq->update(['status'=> $status ]);
        return response()->json(['status'=>1,'message'=>'updated status Successfully']);
    }

    public function delete($id)
    {
        Faq::where('id', $id)->delete();
        echo json_encode(['status'=>1,'message'=>'Your User has been deleted']);
    }

}
