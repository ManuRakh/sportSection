
                        <aside id="colorlib-hero" class="colorlib-degree-bg">
                <div class="flexslider">
                    <ul class="slides">
                       <li style="background-image: url(public/images/img_bg_1.jpg);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                       <div class="slider-text-inner text-center">
                                           <h1>Каждая тренировка - это маленькая история , кусочек твоей жизни...l</h1>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                       <li style="background-image: url(public/images/img_bg_2.jpg);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 slider-text">
                                       <div class="slider-text-inner text-center">
                                           <h1>Не огорчайся неудачам. Падают все. Только кто-то встает быстрее, а кто-то продолжает валяться и ныть</h1>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                       <li style="background-image: url(public/images/img_bg_3.jpg);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                       <div class="slider-text-inner text-center">
                                           <h1>Не проси Уважения, Сделай так что бы Уважали</h1>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>
                       <li style="background-image: url(public/images/img_bg_4.jpg);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 slider-text">
                                       <div class="slider-text-inner text-center">
                                           <h1>Спорт - это награда, а не наказание</h1>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </li>	
                      </ul>
                      <div class="mouse">
                       <a href="#" class="mouse-icon">
                           <div class="mouse-wheel"></div>
                       </a>
                    </div>
                  </div>
            </aside>
    
            <div id="colorlib-intro" class="goto-here">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 intro-wrap animate-box">
                            <div class="intro-flex">
                            @foreach($fprogramm as $fprogram)

                                <div class="one-third intro-img">
                                    <div class="desc">
                                        <h3>{{$fprogram->name}}</h3>
                                        <p class="tag-price">
                                            <span class="price">{{$fprogram->price}} рублей</span>
                                            <span class="month">месяц</span>
                                        </p>
                                        <p>{{$fprogram->shortdesc}}.</p>
                                        <p class="btn-more"><a href="{{$fprogram->id}}">подробнее <i class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            @endforeach                                 
                            </div>
                     </div>
                    </div>
                </div>
            </div>
            
    
            <div id="colorlib-services" class="colorlib-degree-bg-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Work hard stay humble</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 text-center animate-box">
                                    <div class="services">
                                        <span class="icon">
                                            <i class="flaticon-gym"></i>
                                        </span>
                                        <div class="desc">
                                            <h3>Cardio Program</h3>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center animate-box">
                                    <div class="services">
                                        <span class="icon">
                                            <i class="flaticon-weightlifting"></i>
                                        </span>
                                        <div class="desc">
                                            <h3>Body Building</h3>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center animate-box">
                                    <div class="services">
                                        <span class="icon">
                                            <i class="flaticon-martial-arts"></i>
                                        </span>
                                        <div class="desc">
                                            <h3>Karate Classes</h3>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center animate-box">
                                    <div class="services">
                                        <span class="icon">
                                            <i class="flaticon-gloves"></i>
                                        </span>
                                        <div class="desc">
                                            <h3>Boxing Program</h3>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 animate-box">
                                    <div class="services-img" style="background-image: url(public/images/classes-1.jpg);"></div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="services-img" style="background-image: url(public/images/classes-2.jpg);"></div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="services-img" style="background-image: url(public/images/classes-3.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="colorlib-schedule" class="colorlib-light-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Our Class Schedule</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="schedule text-center animate-box">
                            <div class="col-md-12">
                                <ul class="week">
                                    <li class="active"><a href="#">Понедельник</a></li>
                                    <li><a href="#">Вторник</a></li>
                                    <li><a href="#">Среда</a></li>
                                    <li><a href="#">Четверг</a></li>
                                    <li><a href="#">Пятница</a></li>
                                    <li><a href="#">Суббота</a></li>
                                    <li ><a href="#">Воскресенье</a></li>

                                </ul>
                            </div>
                            <div class="schedule-flex">
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-gym"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Cardio Program</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Сброс веса</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-meditation"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Йога</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-gloves"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Boxing Program</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                            </div>
                            <div class="schedule-flex">
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-martial-arts"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Karate Classes</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-weightlifting"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Body Building</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-swimmer"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Swimming Program</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                                <div class="entry-forth">
                                    <p class="icon"><span><i class="flaticon-man"></i></span></p>
                                    <p class="time"><span>06am - 8am</span></p>
                                    <h3>Basic Exercise</h3>
                                    <p class="trainer"><span>Tom Scott</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div id="colorlib-counter" class="colorlib-counters colorlib-degree-bg" style="background-image: url(public/images/intro-img-1.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>What we offer</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 col-sm-6 text-center animate-box">
                                <div class="counter-entry">
                                    <div class="desc">
                                        <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                                        <span class="colorlib-counter-label">Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center animate-box">
                                <div class="counter-entry">
                                    <div class="desc">
                                        <span class="colorlib-counter js-counter" data-from="0" data-to="400" data-speed="5000" data-refresh-interval="50"></span>
                                        <span class="colorlib-counter-label">Trainers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center animate-box">
                                <div class="counter-entry">
                                    <div class="desc">
                                        <span class="colorlib-counter js-counter" data-from="0" data-to="1200" data-speed="5000" data-refresh-interval="50"></span>
                                        <span class="colorlib-counter-label">Managers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 text-center animate-box">
                                <div class="counter-entry">
                                    <div class="desc">
                                        <span class="colorlib-counter js-counter" data-from="0" data-to="1300" data-speed="5000" data-refresh-interval="50"></span>
                                        <span class="colorlib-counter-label">Rooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="colorlib-trainers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Our Trainers</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="trainers-entry">
                                        <div class="trainer-img" style="background-image: url(public/images/trainer-1.jpg)"></div>
                                        <div class="desc">
                                            <h3>Diego Carter</h3>
                                            <span>Power Trainer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="trainers-entry">
                                        <div class="trainer-img" style="background-image: url(public/images/trainer-2.jpg)"></div>
                                        <div class="desc">
                                            <h3>Lea Young</h3>
                                            <span>Yoga Trainer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="trainers-entry">
                                        <div class="trainer-img" style="background-image: url(public/images/trainer-3.jpg)"></div>
                                        <div class="desc">
                                            <h3>Alysha Reed</h3>
                                            <span>Dance Trainer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="trainers-entry">
                                        <div class="trainer-img" style="background-image: url(public/images/trainer-4.jpg)"></div>
                                        <div class="desc">
                                            <h3>George Cooper</h3>
                                            <span>Boxing Trainer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 text-center">
                                    <div class="trainers-entry">
                                        <div class="trainer-img" style="background-image: url(public/images/trainer-2.jpg)"></div>
                                        <div class="desc">
                                            <h3>Melody Moxin</h3>
                                            <span>Boxing Trainer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="colorlib-testimony" class="testimony-img" style="background-image: url(public/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>What people says behind their success</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimony-flex">
                                <div class="one-fifth animate-box">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        </blockquote>
                                        <div class="desc">
                                            <div class="figure-img" style="background-image: url(public/images/person1.jpg);"></div>
                                            <h3>Dave Henderson</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-fifth animate-box">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                        </blockquote>
                                        <div class="desc">
                                            <div class="figure-img" style="background-image: url(public/images/person2.jpg);"></div>
                                            <h3>Dave Henderson</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-fifth animate-box">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                        <div class="desc">
                                            <div class="figure-img" style="background-image: url(public/images/person3.jpg);"></div>
                                            <h3>Dave Henderson</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-fifth animate-box">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                                        </blockquote>
                                        <div class="desc">
                                            <div class="figure-img" style="background-image: url(public/images/person1.jpg);"></div>
                                            <h3>Dave Henderson</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-fifth animate-box">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                        </blockquote>
                                        <div class="desc">
                                            <div class="figure-img" style="background-image: url(public/images/person1.jpg);"></div>
                                            <h3>Dave Henderson</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="colorlib-classes">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Our Classes</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center animate-box">
                            <div class="classes">
                                <div class="classes-img" style="background-image: url(public/images/classes-1.jpg);">
                                    <p class="price text-center"><span>$25.00<br><small>/month</small></span></p>
                                </div>
                                <div class="desc">
                                    <h3><a href="#">Fitness Gym &amp; Cardio</a></h3>
                                    <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                    <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="classes">
                                <div class="classes-img" style="background-image: url(public/images/classes-2.jpg);">
                                    <p class="price text-center"><span>$25.00<br><small>/month</small></span></p>
                                </div>
                                <div class="desc">
                                    <h3><a href="#">Strength Training</a></h3>
                                    <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                    <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="classes">
                                <div class="classes-img" style="background-image: url(public/images/classes-3.jpg);">
                                    <p class="price text-center"><span>$25.00<br><small>/month</small></span></p>
                                </div>
                                <div class="desc">
                                    <h3><a href="#">Yoga Program</a></h3>
                                    <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                    <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
    
            <div class="colorlib-request colorlib-degree-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-push-8 animate-box">
                            <div class="request">
                                <h2>Request</h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-pull-4">
                            <form method="post" class="colorlib-form">
                              <div class="row">
                                  <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                            <label for="services">Services</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="services" id="services" class="form-control">
                                                    <option value="#">Yoga</option>
                                                    <option value="#">Boxing</option>
                                                    <option value="#">Power</option>
                                                    <option value="#">Body Building</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                            <label for="name">Fullname</label>
                                            <div class="form-field">
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                            <label for="email">Phone</label>
                                            <div class="form-field">
                                                <input type="text" class="form-control" placeholder="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                            <label for="date">Date:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 animate-box">
                                        <div class="row">
                                            <div class="col-md-2 col-md-offset-5 col-md-push-5">
                                                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="colorlib-event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Upcoming Events</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row row-pb-sm">
                        <div class="col-md-4 animate-box">
                            <div class="event-entry">
                                <div class="desc">
                                    <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">Special Training for boxing</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="event-entry">
                                <div class="desc">
                                    <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">Gather for World Yoga Day</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="event-entry">
                                <div class="desc">
                                    <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="event.html">Motivational exercise</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-blog colorlib-light-grey colorlib-degree-bg-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Recent Blog</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="blog.html" class="blog-img" style="background-image: url(public/images/blog-1.jpg);">
                                    <p class="meta"><span class="day">18</span><span class="month">May</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="blog.html">5 Ways to Make Yoga Class More Restorative</a></h2>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="blog.html" class="blog-img" style="background-image: url(public/images/blog-2.jpg);">
                                    <p class="meta"><span class="day">18</span><span class="month">May</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="blog.html">3 Balancing Poses for Winter</a></h2>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 animate-box">
                            <article class="article-entry">
                                <a href="blog.html" class="blog-img" style="background-image: url(public/images/blog-3.jpg);">
                                    <p class="meta"><span class="day">18</span><span class="month">May</span></p>
                                </a>
                                <div class="desc">
                                    <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="blog.html">Need workout motivation?</a></h2>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="colorlib-gallery">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Our Gallery</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="images/classes-1.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-1.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-2.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-2.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-3.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-3.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-4.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-4.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-5.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-5.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-6.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-6.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-7.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-7.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-8.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-8.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-9.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-9.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                        <a href="images/classes-1.jpg" class="gallery-img image-popup" style="background-image: url(public/images/classes-1.jpg);">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
            </div>
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
            