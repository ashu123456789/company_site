<div class="mobile-development-faq py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center pb-4" data-aos="zoom-in">
            <h3 class="font-h2">Frequently Asked <span>Questions</span></h3>
            </div>
            <div id="accordion"  class="accordion">
                <div class="card mb-0 custom-card">
                @foreach ($global_faqs as $key=>$value)
                    <div class="card-header collapsed" id="question" data-toggle="collapse" href="#collapse{{$key}}">
                        <a class="card-title"> {{str_replace('#solution-name', $pagename, $value->question)}}</a>
                    </div>
                    <div id="collapse{{$key}}" class="card-body collapse" data-parent="#accordion">
                        <p>
                        {{str_replace('#solution-name', $pagename, $value->answer)}}
                        </p>
                    </div>
                    @endforeach
                 
                </div>
            </div>
        </div>
    </div>

  