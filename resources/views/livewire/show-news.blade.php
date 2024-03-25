<div>
    {{-- The Master doesn't talk, he acts. --}}
    <Section id="blog" class="blog-area" style="margin-top:25px;">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                        @if ($news->isNotEmpty())
                            @foreach ($news as $new)
                                <!-- Start Left Blog -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-blog">
                                        <div class="single-blog-img">
                                            <a href="blog.html">
                                                <img src="{{asset('storage/'.$new->Image)}}" alt="" style="width:400px; height:300px">

                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <!-- <span class="comments-type">
                                                <i class="fa fa-comment-o"></i>
                                                <a href="#">13 comments</a>
                                            </span> -->
                                            <span class="date-type">
                                                <i class="fa fa-calendar"></i>{{$new->created_at}}
                                            </span>
                                        </div>
                                        <div class="blog-text">
                                            <h4>
                                                <a href="blog.html">{{$new->title}}</a>
                                            </h4>
                                            <p>
                                            {{ $new->desc }}
                                            </p>
                                        </div>
                                        <span>
                                            <a href="{{ $new->link }}" class="ready-btn">Read more</a>
                                        </span>
                                    </div>
                                    <!-- Start single blog -->
                                </div>
                       
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
               
</Section>

</div>
