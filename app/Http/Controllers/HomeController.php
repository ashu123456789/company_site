<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Spatie\SchemaOrg\Schema;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Illuminate\Support\Facades\Redirect;
use App\Models\Page;
use App\Models\Job;
use App\Models\Faq;
use App\Models\ProjectEnquiry;
use URL;
use Mail;
use App\Models\JobCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    //Home Page
    public function index()
    {
        $siteurl = URL::to('/');
        $title = "Top Mobile App Development Company in USA, Singapore";
        $desc = "Deorwine Infotech is the top mobile app development company in USA, Singapore & India that offering iOS & Android app development services for your business.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["mobile app development company usa, mobile app design company india, mobile app development services, Top Mobile App Development Company, mobile app development company India, mobile app development company Singapore, top mobile app development company in USA, app development agency, mobile app development agency,online app development,software development solution"]);
        SEOMeta::setCanonical( $siteurl);

        OpenGraph::setDescription($desc);
        OpenGraph::setTitle($title);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl);
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/homepage/home-banner.webp');

        //TwitterCard::addValue($key, $value); // value can be string or array
        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite('@deorwinei'); // site of twitter card tag
        TwitterCard::setDescription($desc); // description of twitter card tag
        TwitterCard::setUrl($siteurl); // url of twitter card tag
        TwitterCard::setImage($imagebase_url.'/images/homepage/home-banner.webp'); // add image url

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        return view('index');
    }

    //about_us page
    public function about_us()
    {
        $title = "About Us Company Profile | Deorwine Infotech";
        $desc = "We are creative and expert IT professionals with years of experience who provide top-level web, app, mobile and software-based IT solutions for your business.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["About us, about us page, about us page design, Deorwine Infotech about us, about us Deorwine Infotech"]);
        SEOMeta::setCanonical($siteurl.'/about-us');

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/about-us');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/about_us/contact-banner.webp');

         //TwitterCard::addValue($key, $value); // value can be string or array
         TwitterCard::setType('summary'); // type of twitter card tag
         TwitterCard::setTitle($title); // title of twitter card tag
         TwitterCard::setSite('@deorwinei'); // site of twitter card tag
         TwitterCard::setDescription($desc); // description of twitter card tag
         TwitterCard::setUrl($siteurl.'/about-us'); // url of twitter card tag
         TwitterCard::setImage($imagebase_url.'/images/about_us/contact-banner.webp'); // add image url

          // JsonLd::setTitle($title);
          // JsonLd::setDescription($desc);
        return view('about_us');
    }

    //Testimonials Page
    public function testimonials()
    {
        $title = 'Deorwine Infotech Reviews & Testimonials for App Development';
        $desc = 'We are glad to share precious words from our happy clients, who trusted us for mobile app and web development and share their experience with us.';
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["testimonial for mobile app, testimonial for software company, developer testimonials"]);
        SEOMeta::setCanonical($siteurl.'/testimonials');

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/testimonials');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/testimonial.png');


        //TwitterCard::addValue($key, $value); // value can be string or array
        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite('@deorwinei'); // site of twitter card tag
        TwitterCard::setDescription($desc); // description of twitter card tag
        TwitterCard::setUrl($siteurl.'/testimonials'); // url of twitter card tag
        TwitterCard::setImage($imagebase_url.'/images/testimonial.png'); // add image url



        //JsonLd::setTitle($title);
        //JsonLd::setDescription($desc);
        return view('testimonials');
    }

    //Partnership Page
    public function partnership()
    {
        $title = "Partnership With Us - Deorwine Infotech";
        $desc = "Deorwine Infotech is running a precise partnership program in the past decade that aiming to grow together. Your products our ideas make a profitable business.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["features of partnership, general partnership, corporation, Partnership, Partnership program,  Business Partnership Program, partnership programs"]);
        SEOMeta::setCanonical($siteurl.'/partnership');

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/partnership');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/partnership/partnership-banner.webp');

        //TwitterCard::addValue($key, $value); // value can be string or array
        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite('@deorwinei'); // site of twitter card tag
        TwitterCard::setDescription($desc); // description of twitter card tag
        TwitterCard::setUrl($siteurl.'/partnership'); // url of twitter card tag
        TwitterCard::setImage($imagebase_url.'/images/partnership/partnership-banner.webp'); // add image url

        //JsonLd::setTitle($title);
        //JsonLd::setDescription($desc);
        return view('partnership');
    }

    //life At Deorwine Page
    public function lifeat()
    {
        $title = "Let's Perceive More About Life at Deorwine Infotech";
        $desc = "Combine lots of journeys to become a life, lets start Deorwine Infotech Journey, who they are and how to become a well-managed app and web development company.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["super life of Deorwine Infotech, super life of Deorwine Infotech company , Journey of Deorwine Infotech,  Life of Deorwine Infotech"]);
        SEOMeta::setCanonical($siteurl.'/life-at-deorwine');

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/life-at-deorwine');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/life-at-d.png');

        //TwitterCard::addValue($key, $value); // value can be string or array
        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite('@deorwinei'); // site of twitter card tag
        TwitterCard::setDescription($desc); // description of twitter card tag
        TwitterCard::setUrl($siteurl.'/life-at-deorwine'); // url of twitter card tag
        TwitterCard::setImage($imagebase_url.'../images/life-at-d.png'); // add image url

        //JsonLd::setTitle($title);
        //JsonLd::setDescription($desc);
        return view('life_at_deorwine');
    }

    //Career Page
    public function career()
    {
        $jobs = JobCategory::with('job')->select()->get();

        $title = "Career @ Deorwine : Work With Deorwine Infotech";
        $desc = "At Deorwine Infotech, We are always looking for limit-pushers, passionate learners, and enthusiastic collaborators. People who can get things done.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["career at deorwine,career opportunity at deorwine,jobs at deorwine,current openings in deorwine,jobs in it company in india,jobs in it company in jaipur, make career with Deorwine Infotech"]);
        SEOMeta::setCanonical($siteurl.'/career');

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/career');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/Component105–1-min.png');

        //TwitterCard::addValue($key, $value); // value can be string or array
        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite('@deorwinei'); // site of twitter card tag
        TwitterCard::setDescription($desc); // description of twitter card tag
        TwitterCard::setUrl($siteurl.'/career'); // url of twitter card tag
        TwitterCard::setImage($imagebase_url.'/images/Component105–1-min.png'); // add image url

        //JsonLd::setTitle($title);
        //JsonLd::setDescription($desc);
        return view('career',compact('jobs','siteurl'));
    }

    //Contact Us Page
    public function contactus()
    {
        $title = "Contact With Mobile App Development Company";
        $desc = "Lets Build Your App! One-stop solution for your mobile app and web development related inquiries. Fill up the form below, our representatives will contact you.";
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        $siteurl = URL::to('/');
        SEOMeta::setTitle($title,false);
        SEOMeta::setDescription($desc);
        SEOMeta::addKeyword(["contact us,contact deorwine infotech,get in touch with premium mobile and web development services provider company deorwine infotech,get in touch with premium mobile and web development services provider company in india, get in touch with us"]);
        SEOMeta::setCanonical($siteurl.'/contact-us');

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setSiteName($sitename);
        OpenGraph::setUrl($siteurl.'/contact-us');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-us');
        OpenGraph::addImage($imagebase_url.'/images/about_us/contact-banner.webp');


        //TwitterCard::addValue($key, $value); // value can be string or array
        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite('@deorwinei'); // site of twitter card tag
        TwitterCard::setDescription($desc); // description of twitter card tag
        TwitterCard::setUrl($siteurl.'/contact-us'); // url of twitter card tag
        TwitterCard::setImage($imagebase_url.'/images/about_us/contact-banner.webp'); // add image url

        //JsonLd::setTitle($title);
        //JsonLd::setDescription($desc);
        return view('contact_us');
    }


    public function page($slug)
    {
        $page = Page::where('slug',$slug)->first();
        $sitename = "Deorwine Infotech";
        $imagebase_url = env('APP_CDN_URL');
        if($page){
            SEOMeta::setTitle($page->title,false);
            SEOMeta::setDescription($page->description);
            SEOMeta::addKeyword($page->keyword);
            SEOMeta::setCanonical($page->canonical);

            OpenGraph::setTitle($page->title);
            OpenGraph::setDescription($page->description);
            OpenGraph::setSiteName($sitename);
            OpenGraph::setUrl($page->canonical);
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('locale', 'en-us');
            OpenGraph::addImage($imagebase_url.$page->image);

            TwitterCard::setType('summary'); // type of twitter card tag
            TwitterCard::setTitle($page->title); // title of twitter card tag
            TwitterCard::setSite('@deorwinei'); // site of twitter card tag
            TwitterCard::setDescription($page->description); // description of twitter card tag
            TwitterCard::setUrl($page->canonical); // url of twitter card tag
            TwitterCard::setImage($imagebase_url.$page->image); // add image url


            JsonLd::setTitle($page->title);
            JsonLd::setDescription($page->description);


            // JsonLd::setTitle($page->title)
            // ->setDescription($page->description)
            // ->setUrl([
            //   "@type"=> "AggregateRating",
            //   "ratingValue"=> env('RATING_VALUE'),
            //   "ratingCount"=> env('RATING_COUNT')
            // ]);





            return view($page->slug,compact('page'));
        }else{

          return abort(404);
        }
    }


    public function contactform(Request $request)
    {
        $url = url()->previous();
        $uri_parts = explode('/', $url);
        $last_url = end($uri_parts);

        $ip = $request->ip();

        $type = $request->url();
        $type_parts = explode('/', $type);
        $type_last = end($type_parts);

          $rules = [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|required|regex:/^([0-9\s\+\(\)]*)$/|min:10|max:20|',
            'subject' => 'required|regex:/^[\pL\s\-]+$/u',
            'message' => 'required',
          ];
          $message = [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name must be alphabetic.',
            'email.required' => 'Please enter your email.',
            'phone.required' => 'Please enter your phone.',
            'subject.required' => 'Please enter your subject.',
            'message.required' => 'Please brief us about your requirements.',
          ];
          $validator = Validator::make($request->all(), $rules, $message);

          if ($validator->passes()) {
            $contact = new ProjectEnquiry();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->url=$last_url;
            $contact->ip=$ip;
            $contact->type=$type_last;
            $contact->save();

            $data = array('type' => $type_last,
            'url' => $last_url,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'messages' => $request->get('message'));

            Mail::send('emails.mail', $data, function($m) use($request) {
                $m->to(env('MAIL_TO'), 'Deorwine Infotech')->subject
                   ("Contact_Us Enquiry");
                $m->from(env('MAIL_FROM_ADDRESS'),'Deorwine');
             });
            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }

    public function project_enquiry(Request $request)
    {

        $url = url()->previous();
        $uri_parts = explode('/', $url);
        $last_url = end($uri_parts);

        $ip = $request->ip();

        $type = $request->url();
        $type_parts = explode('/', $type);
        $type_last = end($type_parts);

          $rules = [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\+\(\)]*)$/|min:10|max:20|',
            //'budget' => 'required|integer',
            'message' => 'required',
            'interested' => 'required|regex:/^[\pL\s\-]+$/u',
            //'skype' => 'required|alpha_num',
            //'file' => 'required|mimes:png,jpg,jpeg,doc,docx,pdf|max:5048'
          ];
          $message = [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name must be alphabetic.',
            'email.required' => 'Please enter your email.',
            'phone.required' => 'Please enter your phone.',
            //'budget.required' => 'Budget is required.',
            'message.required' => 'Please brief us about your requirements.',
            'interested.required' => 'Please select your interest area.',
            //'skype.required' => 'Skype is required.',
            //'file' => 'File is required.',
          ];
          $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->passes()) {
            $contact = new ProjectEnquiry();
            $contact->name = $request->name;
            $contact->email = $request->email;
            // $contact->phone = $request->phone;

            $phone = $request->code.$request->phone;
            $contact->phone = $phone;

            $contact->budget = $request->budget;
            $contact->message = $request->message;
            $contact->skype = $request->skype;
            $contact->interested = $request->interested;
            $contact->url=$last_url;
            $contact->ip=$ip;
            $contact->type=$type_last;
            if ($request->exists('file') && $request->hasFile('file'))
            {
            $file = $request->file;
            $ext= $file->getClientOriginalExtension();;
            $name = uniqid().'-'.time().'.'.$ext;
            Storage::disk('local')->putFileAs('public/enquiry/', $file, $name, 'public');
            $contact->file= $name;
            }
            $contact->save();

            $data = array('type' => $type_last,
            'url' => $last_url,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'messages' => $request->get('message'),
            'interesteds' => $request->get('interested'),
            'budgets' => $request->get('budget'));

            Mail::send('emails.mail', $data, function($m) use($request) {
                $m->to(env('MAIL_TO'), 'Deorwine Infotech')->subject
                   ("Footer Form Enquiry");
                $m->from(env('MAIL_FROM_ADDRESS'),'Deorwine');
             });


            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }

    public function enquire_form(Request $request)
    {
        $url = url()->previous();
        $uri_parts = explode('/', $url);
        $last_url = end($uri_parts);
        $ip = $request->ip();

        $type = $request->url();
        $type_parts = explode('/', $type);
        $type_last = end($type_parts);

        $rules = [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|required|regex:/^([0-9\s\+\(\)]*)$/|min:10|max:20|',
            'budget' => 'required',
            'message' => 'required',
            'interested' => 'required|regex:/^[\s\w-]*$/',
            'about' => 'required',

          ];
          $message = [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name must be alphabetic.',
            'email.required' => 'Please enter your email.',
            'phone.required' => 'Please enter your phone.',
            'budget.required' => 'Please select your budget range.',
            'message.required' => 'Please brief us about your requirements.',
            'interested.required' => 'Please select your interest area.',
            'about.required' => 'We are curious, please select an option.',
          ];
          $validator = Validator::make($request->all(), $rules, $message);

            if ($validator->passes()) {
            $contact = new ProjectEnquiry();
            $contact->name = $request->name;
            $contact->email = $request->email;
            // $contact->phone = $request->phone;

            $phone = $request->code.$request->phone;
            $contact->phone = $phone;

            $contact->budget = $request->budget;
            $contact->message = $request->message;
            $contact->about = $request->about;
            $contact->interested = $request->interested;
            $contact->url=$last_url;
            $contact->ip=$ip;
            $contact->type=$type_last;
            $contact->save();

            $data = array('type' => $type_last,
            'url' => $last_url,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'messages' => $request->get('message'),
            'interesteds' => $request->get('interested'),
            'budgets' => $request->get('budget'));

            Mail::send('emails.mail', $data, function($m) use($request) {
                $m->to(env('MAIL_TO'), 'Deorwine Infotech')->subject
                   ("Enquiry Now!");
                $m->from(env('MAIL_FROM_ADDRESS'),'Deorwine');
             });

            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }

    public function quote_form(Request $request)
    {
        $url = url()->previous();
        $uri_parts = explode('/', $url);
        $last_url = end($uri_parts);

        $ip = $request->ip();

        $type = $request->url();
        $type_parts = explode('/', $type);
        $type_last = end($type_parts);

        $rules = [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|required|regex:/^([0-9\s\+\(\)]*)$/|min:10|max:20|',

          ];
          $message = [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name must be alphabetic.',
            'email.required' => 'Please enter your email.',
            'phone.required' => 'Please enter your phone.',
          ];
          $validator = Validator::make($request->all(), $rules, $message);
          if ($validator->passes()) {
            $contact = new ProjectEnquiry();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->url=$last_url;
            $contact->ip=$ip;
            $contact->type=$type_last;
            $contact->save();

            $data = array('type' => $type_last,
            'url' => $last_url,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'));

            Mail::send('emails.mail', $data, function($m) use($data) {
                $m->to(env('MAIL_TO'), 'Deorwine Infotech')->subject
                   ("Quote Form Enquiry");
                $m->from(env('MAIL_FROM_ADDRESS'),'Deorwine');
             });


            return response()->json(['success'=>'Added new records.']);
          }
        return response()->json(['error'=>$validator->errors()]);
    }

    public function service_form(Request $request)
    {
        $url = url()->previous();
        $uri_parts = explode('/', $url);
        $last_url = end($uri_parts);

        $ip = $request->ip();

        $type = $request->url();
        $type_parts = explode('/', $type);
        $type_last = end($type_parts);

        $rules = [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|required|regex:/^([0-9\s\+\(\)]*)$/|min:10|max:20|',
            //'file' => 'required|mimes:png,jpg,jpeg,doc,docx,pdf|max:5048'

          ];
          $message = [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name must be alphabetic.',
            'email.required' => 'Please enter your email.',
            'phone.required' => 'Please enter your phone.',
            //'file' => 'File is required.',
          ];
          $validator = Validator::make($request->all(), $rules, $message);
          if ($validator->passes()) {
            $contact = new ProjectEnquiry();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->url=$last_url;
            $contact->ip=$ip;
            $contact->type=$type_last;
            if ($request->exists('file') && $request->hasFile('file'))
            {
            $file = $request->file;
            $ext= $file->getClientOriginalExtension();;
            $name = uniqid().'-'.time().'.'.$ext;
            Storage::disk('local')->putFileAs('public/services/', $file, $name, 'public');
            $contact->file= $name;
            }
            $contact->save();

            $data = array('type' => $type_last,
            'url' => $last_url,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'));

            Mail::send('emails.mail', $data, function($m) use($request) {
                $m->to(env('MAIL_TO'), 'Deorwine Infotech')->subject
                   ("Job Form Enquiry");
                $m->from(env('MAIL_FROM_ADDRESS'),'Deorwine');
             });


            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }

    public function hire_form(Request $request)
    {
        $url = url()->previous();
        $uri_parts = explode('/', $url);
        $last_url = end($uri_parts);

        $ip = $request->ip();

        $type = $request->url();
        $type_parts = explode('/', $type);
        $type_last = end($type_parts);

        $rules = [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'phone' => 'required|required|regex:/^([0-9\s\+\(\)]*)$/|min:10|max:20|',
            'company_name' => 'required|alpha',
            'country' => 'required|alpha',
            'state' => 'required|alpha',

          ];
          $message = [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'The name must be alphabetic.',
            'email.required' => 'Please enter your email.',
            'phone.required' => 'Phone is required.',
            'company_name.required' => 'Company Name is required.',
            'country.required' => 'Country is required.',
            'state.required' => 'State is required.',
          ];
          $validator = Validator::make($request->all(), $rules, $message);
          if ($validator->passes()) {
            $contact = new ProjectEnquiry();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->company_name = $request->company_name;
            $contact->country = $request->country;
            $contact->state = $request->state;
            $contact->url=$last_url;
            $contact->ip=$ip;
            $contact->type=$type_last;
            $contact->save();


            $data = array('type' => $type_last,
            'url' => $last_url,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'));

            Mail::send('emails.mail', $data, function($m) use($request) {
                $m->to(env('MAIL_TO'), 'Deorwine Infotech')->subject
                   ("Hire Form Enquiry");
                $m->from(env('MAIL_FROM_ADDRESS'),'Deorwine');
             });


            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }


    public function pagenotfound()
    {
      $title = "Page Not Found - Go to Homepage";
      $desc = "Oops! The page you are looking for does not exist. It might have been moved or deleted.";
      SEOMeta::setTitle($title,false);
      SEOMeta::setDescription($desc);
      return view('errors.404');
    }

    public function job($slug)
    {
      $job = Job::where('slug',$slug)->first();

      $jobs = $job->skills;
      $skills = explode(",", $jobs);
      return view('react-native-developer',compact('job','skills'));
    }

    public function blogdata()
    {
      $apiURL = 'https://deorwine.com/blog/wp-json/wp/v2/posts';
      $response = Http::get($apiURL, [
        'per_page'=>3
      ]);
        $data = json_decode($response->getBody(), true);
        // $array= [];
        // foreach($data as $d)
        // {
        //   $d['image'] = $d['my_meta']['blog_front_image']['url'];

        // }
        // dd($d['my_meta']['blog_front_image']['url']);
        $html = view("components.blogs",compact('data'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function thankyou()
    {
      return view('thankyou');
    }
}
