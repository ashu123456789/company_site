<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Routing\UrlGenerator;
use App\Models\Portfolio;
use URL;


class PortfolioController extends Controller
{
    public function portfolio(Request $request)
    {
        $pid = $request->pid;
        $portfolio = Portfolio::where('id',$pid)->first();
        return response()->json(['success' => true, 'data' => $portfolio]);
    }

    public function projectlist()
    {

        $title = "Mobile App Development Portfolio of Deorwine Infotech";
        $desc = "Do you want to check our portfolio? Then look over Android and iOS based mobile apps developed by our certified developers.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["App Development Portfolio", "Android App Development Portfolio", "Mobile App Development Portfolio", "Portfolio", "Deorwine Infotech App Development Portfolio"]);
        SEOMeta::setCanonical($siteurl.'/portfolio');
        
        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/portfolio');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/portfolio/project-bg.png');

         //TwitterCard::addValue($key, $value); // value can be string or array
         TwitterCard::setType('summary'); // type of twitter card tag
         TwitterCard::setTitle($title); // title of twitter card tag
         TwitterCard::setSite('@deorwinei'); // site of twitter card tag
         TwitterCard::setDescription($desc); // description of twitter card tag
         TwitterCard::setUrl($siteurl.'/portfolio'); // url of twitter card tag
         TwitterCard::setImage($imagebase_url.'/images/portfolio/project-bg.png'); 

        $project = Portfolio::orderBy('order_no','asc')->get();
        //dd($project);
        return view('portfolio',compact('project'));
    }
}
