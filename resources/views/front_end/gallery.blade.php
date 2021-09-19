@extends('layouts.main')
<section class="page_banner bg_cover" style="background-image: url({{ asset('front_end/images/slider-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page_banner_content text-center">
                        <h3 class="page_title">Gallery</h3>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class="active" href="/">Our Gallery</a></li>
                        </ul>
                    </div> <!-- page banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section class="contact_area pt-100 pb-130">
        <div class="services_shape_1" style="background-image: url({{ asset('front_end/images/shape/shape-12.png')}})"></div>
        <div class="container">
            <div class="row">
                @foreach($todoArr1 as $todo1)
				    @if($todo1->galleryimage!= "" || $todo1->galleryimage != null)
                        @if (file_exists(public_path().'/upload/admin_profile/'.$todo1->galleryimage ))
                        <div class="col-lg-4 col-sm-6">
									<div class="single-blog" style="height:300px;">
									<a href="{{asset('/upload/admin_profile/')}}/{{$todo1->galleryimage}}">
										<img src="{{asset('/upload/admin_profile/')}}/{{$todo1->galleryimage}}" alt="{{$todo1->imagealt}}" title="{{$todo1->imagetitle}}">
                                        <p>{{$todo1->imagename}}</p>
                                    </a>
                                    </div>
								</div>
							@endif
						@endif
					@endforeach
            </div> 
        </div>
        </div> 
    </section>
