@extends('layouts.main')
    <section class="page_banner bg_cover" style="background-image: url({{ asset('front_end/images/slider-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page_banner_content text-center">
                        <h3 class="page_title">About us</h3>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="#">Home</a></li>
                            <li><a class="active" href="#">About</a></li>
                        </ul>
                    </div> <!-- page banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="about_area pt-80 pb-130">
        <div class="services_shape_1" style="background-image: url({{ asset('front_end/images/shape/shape-12.png')}})"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                        <div class="image_1">
                            <img src="{{ asset('front_end/images/about.jpg')}}" style="height:700px;" alt="about">
                        </div>
                        
                     <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content_3 mt-45">
                        <h3 class="about_title">About Parth Charitable Society</h3>
                        <p>Parth Charitable Society is founded by Mrs Anita Singh Rajput Ji. She is the top most pillar of her organization . Her positive thinking towards mankind and nature motivated her to form
                        an organization which supports children , women , old age people , disable people and any person who needs support this organization helps them by all means they can.
                        Parth Charitable Society also supports “cleaning air” , gov initiatives like “cleaning rivers” , “safai abhiyan” and many more.</p>
                        <p style=text-align:justify>The main moto of organization is to help women and empower them to take care of themselves 
                        So that one day they each and every woman feels proud. This organization also helped people in covid-19 lockdown period when people need food Mrs Anita Singh ji decided to help people 
                        In this emergency and the distributed food in local colonies either they are poor or not their team help everyone . It is also the support of members of this organization which makes this organization stand among the crowd and become unique .
                        The love of Mrs Anita Rajput Sing Ji for children can be seen in the work areas  and pictures of organizations as we can say “The mother knows what their children needs  ” and yes their effort for poor children is undoubtedly heart touching like distributing food and clothes in slum areas . 
                        Organizing art competitions to encourage children for creativity is the key point of whole organizations </p>
               
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
  
    <section class="volunteer_area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center pb-30">
                        <img src="{{ asset('front_end/images/section_icon.png')}}" alt="Icon">
                        <h3 class="title">Our Volunteers</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_1">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Anita Singh Bisen Ji Founder.jpg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Maria Noor</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_2">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/pooja singh Chandel Sachiv( Secretary).jpg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Kiara Roy</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_3">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Shalini Pandey Vice President.jpg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Adams Hobes</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_4">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Manorama Ji Chief Secreatory.jpg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Adams Hobes</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
            </div>
                <div class="row" style="text-align:center;">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_1">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Pooja Singh.jpg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Maria Noor</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_2">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/kajal.jpeg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Kiara Roy</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_3">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Sunil Singh Chief Incharge.jpg')}}" alt="Volunteer">
                            <div class="volunteer_social">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Adams Hobes</a></h5>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                            </div>
            </div>
            <section class="video_area_3 pt-80 pb-130 bg_cover" style="background-image: url({{ asset('front_end/images/videobg.jpg')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video_image mt-50">
                        <img src="{{ asset('front_end/images/video-image.jpg')}}" alt="video">
                        <a href="https://www.youtube.com/watch?v=WKUjCCOcLFY" class="video-popup">
                            <i class="fa fa-play"></i>
                            <img src="{{ asset('front_end/images/shape/shape-3.png')}}" alt="shape">
                        </a>
                    </div> <!-- about video -->
                </div>
                <div class="col-lg-6">
                    <div class="video_content_3 mt-45">
                        <h4 class="video_title">We served more then 80k+ peoples</h4>
                        <p>Parth Charity Society is a nonproﬁt organization supported by community leaders, corporate sponsors, churches and concerned citizens join. There will be a day–in our lifetime–when we get to celebrate.</p>
                        <a href="#" class="main-btn"><i class="fa fa-heart"></i> Donate  Now</a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

            <!-- container -->
    </section>
    
    
