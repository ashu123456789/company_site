<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\Page;

class PageController extends Controller
{
    public function index(Request $request)
    {
        //dd("hello");
        if($request->ajax()){
            $faq = Page::orderBy('created_at','desc');
            return datatables()->eloquent($faq)
            ->editColumn('updated_at', function ($request) {
                return $request->updated_at->format('Y-m-d'); 
              })->toJson();
        }
        else{
        $title = "Page Manager";
        return view('admin.page.index',compact('title'));
        }
    }

    public function create()
    {
        $title = "Page Add";
        $selPage = "";
        return view('admin.page.create',compact('title','selPage'));
    }

    public function store(PageRequest $request)
    {
        $pages = Page::where('slug',$request->slug)->first();
        if($pages)
        {
            return redirect()->route('admin.pages')->with('error','Slug already exist');
        }
        else{
        $page = new Page();
        $page->type = $request->type;
        $page->slug = $request->slug;
        $page->title = $request->title;
        $page->description = $request->description;
        $page->keyword = $request->keyword;
        $page->canonical = $request->canonical;
        $page->save();
        return redirect()->route('admin.pages')->with('success',' Added Page');
        }
    }

    public function show($id)
    {
        $title = "Page Details";
        $page = Page::where('id', $id)->first();
        return view('admin.page.details', compact('page','title'));
    }
    public function edit($id)
    {
        $title="Edit Page";
        $page = Page::where('id', $id)->first();
        $selPage =  $page->id;
        return view('admin.page.edit', compact('page','title','selPage'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            //'slug' => 'required|unique:pages,slug,' . $id,
            //'type' => 'required',
            'title' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'canonical' => 'required',
          ];
          $message = [
            //'slug.required' => 'The slug is required',
            //'type.required' => 'The type is required',
            'title.required' => 'The title is required',
            'description.required' => 'The description is required',
            'keyword.required' => 'The keyword is required',
            'canonical.required' => 'The Canonical is requied'
          ];
          $v = Validator::make($request->all(), $rules, $message);
          if ($v->fails()) {
            return redirect::back()
              ->withErrors($v)
              ->withInput();
          }
          else{
        $page = Page::find($id);
        $page->type = $request->type;
        $page->slug = $request->slug;
        $page->title = $request->title;
        $page->description = $request->description;
        $page->keyword = $request->keyword;
        $page->canonical = $request->canonical;
        $page->save();
        return redirect()->route('admin.pages')->with('success','Update Successfully');
          }
    }

    public function delete($id)
    {
        Page::where('id', $id)->delete();
        echo json_encode(['status'=>1,'message'=>'Your User has been deleted']);
    }
}
