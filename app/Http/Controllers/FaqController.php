<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use App\Models\Faq;

class FaqController extends Controller
{
    public function faq(Request $request)
    {
        $pagename = $request->name;
        //$request = Request::all();
        $global_faqs = Faq::all();
        $html = view("components.innerfaq",compact('global_faqs','pagename'))->render();
        return response()->json(['success' => true, 'html' => $html]);

    }
}
