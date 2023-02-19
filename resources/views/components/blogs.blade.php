<div class="news_articles py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                    <div class="col-12 text-center title-heading">
                        <h3>News & Articles</h3>
                        <p class="mx-auto mt-3 mb-0">What’s new and trending?</p>
                    </div>
                    @foreach($data as $da)
                    <div class="news col-lg-4 col-12 col-md-4 mt-4">
                        <div class="card news_card">
                        <a href="{{$da['link']}}"><img alt="{!! $da['title']['rendered'] !!}" title="{!! $da['title']['rendered'] !!}" src="{{$da['my_meta']['blog_front_image']['url'] }}" class="img-fluid"></a>
                           <a href="{{$da['link']}}" title="{{$da['title']['rendered']}}"> <p>{!! $da['title']['rendered'] !!}</p></a>
                          
                            <div class="blue-card">
                                <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            <div class="text-center mt-4"><button class="btn blog-btn"><a href="https:\\deorwine.com\blog">All Latest Blogs</a></button></div>
        </div>
    </div>