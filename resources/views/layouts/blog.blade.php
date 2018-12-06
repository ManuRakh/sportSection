
            <aside id="colorlib-hero" class="colorlib-degree-bg">
                <div class="flexslider">
                    <ul class="slides">
                       <li style="background-image: url(public/images/img_bg_5.jpg);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                       <div class="slider-text-inner text-center">
                                           <h1>Новости клуба</h1>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                      </ul>
                  </div>
            </aside>
           

            <div class="colorlib-blog">
                <div class="container">
                    <div class="row">
                        
                    @foreach($blogs as $blog)
                            @if($i==3)
                                 </div>
                     <div class="row">
                            @endif

                        @php
                        $i = 1
                        @endphp

                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="" class="blog-img" style="background-image: url({{$blog->img}});">
                                    <p class="meta"><span class="day">{{ date("d",strtotime($blog->date)) }}</span><span class="month">{{ $blog->month}}
</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Автор статьи:</span> <span>{{$blog->postedby}}</span></p>
                                    <h2><a href="">{{$blog->name}}</a></h2>
                                </div>
                            </article>
                        </div>
                    @endforeach
                   
                        
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="blog.html" class="blog-img" style="background-image: url(images/blog-4.jpg);">
                                    <p class="meta"><span class="day">18</span><span class="month">May</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="blog.html">5 Ways to Make Yoga Class More Restorative</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="blog.html" class="blog-img" style="background-image: url(images/blog-5.jpg);">
                                    <p class="meta"><span class="day">18</span><span class="month">May</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="blog.html">3 Balancing Poses for Winter</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="blog.html" class="blog-img" style="background-image: url(images/blog-6.jpg);">
                                    <p class="meta"><span class="day">18</span><span class="month">May</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="blog.html">Need workout motivation?</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </article>
                        </div>
                    </div> -->
                </div>
            </div>
    {{ $blogs->links() }}

            <div id="colorlib-subscribe">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Subscribe Newsletter</h2>
                            <p>Subscribe our newsletter and get latest update</p>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="row">
                                <div class="col-md-12">
                                <form class="form-inline qbstp-header-subscribe">
                                    <div class="col-three-forth">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-one-third">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    