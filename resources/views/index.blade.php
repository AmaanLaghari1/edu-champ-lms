@extends('layouts.website.master')

@push('title')
Home
@endpush('title')

@push('css')

@endpush('css')

@push('header_classes')
header_top
@endpush('header_classes')

@section('main')
    <!--==================
        Slider
    ===================-->
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider">
            <ul>
                <li data-index="rs-1706" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <div class="slider-overlay"></div>
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="{{asset('website/assets')}}/images/banner/banner_1.jpg" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-200','-280','-250','-200']" 
                        data-fontsize="['20','40','40','28']"
                        data-lineheight="['70','80','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                        style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement Of Knowledge
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-1" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-140','-120']" 
                        data-fontsize="['65','120','100','70']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">Take The First Step To
                    </div>

                    <!-- LAYER NR.3 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-1" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-40','0','-10','-40']" 
                        data-fontsize="['65','120','100','70']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">Knowledge With Us.
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn rev-btn left_btn" 
                        id="slide-2939-layer-8" 
                        data-x="['left','left','left','left']" data-hoffset="['0','500','420','280']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']" 
                        data-fontsize="['14','14','10','8']"
                        data-lineheight="['34','34','30','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="off"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[12,12,8,8]"
                        data-paddingright="[40,40,30,25]"
                        data-paddingbottom="[12,12,8,8]"
                        data-paddingleft="[40,40,30,25]"

                        style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">Get Started Now
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption rev-btn rev-btn right-btn" 
                        id="slide-2939-layer-8" 
                        data-x="['left','left','left','left']" data-hoffset="['250','-60','-130','-100']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']" 
                        data-fontsize="['14','14','10','8']"
                        data-lineheight="['34','34','30','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="off"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#fff;bg:#ff5a2c;bw:2px 2px 2px 2px; "}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[12,12,8,8]"
                        data-paddingright="[40,40,30,25]"
                        data-paddingbottom="[12,12,8,8]"
                        data-paddingleft="[40,40,30,25]"

                        style="z-index: 14; white-space: nowrap;  font-weight:500; color:#ffffff; font-family:Rubik; text-transform:uppercase; background-color:#092ace; letter-spacing:1px; border-radius: 3px;">View Courses
                    </div>
                </li>

                <li data-index="rs-1708" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <div class="slider-overlay"></div>
                    <img src="{{asset('website/assets')}}/images/banner/banner_2.jpg" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-200','-280','-250','-200']" 
                        data-fontsize="['20','40','40','28']"
                        data-lineheight="['70','80','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        
                        style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement Of Knowledge
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-11" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-140','-120']" 
                        data-fontsize="['65','120','100','70']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">Take The First Step To
                    </div>

                    <!-- LAYER NR.3 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-12" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-40','0','-10','-40']" 
                        data-fontsize="['65','120','100','70']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 700; white-space: nowrap;text-transform:left;">Knowledge With Us.
                    </div>

                        <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn rev-btn left_btn" 
                        id="slide-2939-layer13" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']" 
                        data-fontsize="['14','14','10','8']"
                        data-lineheight="['34','34','30','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="off"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[12,12,8,8]"
                        data-paddingright="[40,40,30,25]"
                        data-paddingbottom="[12,12,8,8]"
                        data-paddingleft="[40,40,30,25]"

                        style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">Get Started Now
                    </div>
                        <!-- LAYER NR. 5 -->
                    <div class="tp-caption rev-btn rev-btn right-btn" 
                        id="slide-2939-layer-15" 
                        data-x="['left','left','left','left']" data-hoffset="['250','-60','-130','-100']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']" 
                        data-fontsize="['14','14','10','8']"
                        data-lineheight="['34','34','30','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="off"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#fff;bg:#ff5a2c;bw:2px 2px 2px 2px; "}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[12,12,8,8]"
                        data-paddingright="[40,40,30,25]"
                        data-paddingbottom="[12,12,8,8]"
                        data-paddingleft="[40,40,30,25]"

                        style="z-index: 14; white-space: nowrap;  font-weight:500; color:#ffffff; font-family:Rubik; text-transform:uppercase; background-color:#092ace; letter-spacing:1px; border-radius: 3px;">View Courses
                    </div>
                </li>

            </ul><!-- END SLIDES LIST -->
        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header> <!--  End header section-->







<section class="cources_highlight">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="latest_blog_carousel">
                     <div class="single_item single_item_first">
                        <div class="blog-img">
                            <a href="#"><img src="{{asset('website/assets')}}/images/features/features_1.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog_title">
                            <span>look At</span>  
                            <h3><a href="#" title="">Next Scheduled</a></h3> 
                            <p>Lorem Ipsum dolor sit amet mollis felis arcu donec viverra. Pede phasellus etiam; Aaecenas vel vici quis dictum rutrum nec nisi et ac penatibus aenean....</p>                    
                        </div>   
                    </div>

                    <div class="single_item single_item_center">
                        <div class="blog-img">
                            <a href="#" title=""><img src="{{asset('website/assets')}}/images/features/features_2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog_title">
                            <span>Go To</span>  
                            <h3><a href="#" title="">Online Courees</a></h3> 
                            <p>Lorem Ipsum dolor sit amet mollis felis arcu donec viverra. Pede phasellus etiam; Aaecenas vel vici quis dictum rutrum nec nisi et ac penatibus aenean. Pede enim nunc ultricies quis rhoncus penatibus tincidunt integer felis...</p>                    
                        </div>   
                    </div>

                   <div class="single_item single_item_last">
                        <div class="blog-img">
                            <a href="#" title=""><img src="{{asset('website/assets')}}/images/features/features_3.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog_title">
                            <span>Get Your</span>  
                            <h3><a href="#" title="">Education Equip</a></h3> 
                             <p>Lorem Ipsum dolor sit amet mollis felis arcu donec viverra. Pede phasellus etiam; Aaecenas vel vici quis dictum rutrum nec nisi et ac penatibus aenean....</p>  
                        </div>   
                    </div>

                </div>
            </div>             
        </div>
    </div>
</section><!-- End Popular Courses Highlight -->


<section class="popular_courses">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Our Popular Courses</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset('website/assets')}}/images/courses/courses_1.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">$150</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Make Better Decisions</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">Jhonthan Smith</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i>180 Days</li>
                                <li><i class="fas fa-user"></i>30 Students</li>
                            </ul>
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->



            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset('website/assets')}}/images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">Free</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">How To Be A Speaker</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">Denise Wood</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i> 180 Days</li>
                                <li><i class="fa fa-user"></i>50 Students</li>
                            </ul>
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset('website/assets')}}/images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">120$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Network Introductions</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i> 140 Days</li>
                                <li><i class="fa fa-user"></i>60 Students</li>
                            </ul>
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset('website/assets')}}/images/courses/courses_4.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">250$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Brand Management</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">John Porter</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i> 130 Days</li>
                                <li><i class="fa fa-user"></i>45 Students</li>
                            </ul>
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset('website/assets')}}/images/courses/courses_5.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">180$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Moralities Of Everyday</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">Mittie Hill</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i> 190 Days</li>
                                <li><i class="fa fa-user"></i>40 Students</li>
                            </ul>
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset('website/assets')}}/images/courses/courses_6.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">130$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Life Coach Training</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">Marian Dupre</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i> 150 Days</li>
                                <li><i class="fa fa-user"></i>30 Students</li>
                            </ul>
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->                           
        </div>

    </div>
</section><!-- ./ End Courses Area section -->


<section class="about_top_wrapper">
    <div class="container">            
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="title">
                    <h2>Take The First Step To Learn With Us.</h2>
                    <p>At vero eos et accusamus et iusto odio dignissio ducimus qui blanditiis praesentium volu ptat umtjk deleniti atque corrupti quos esentium voluptatum delen itamus et iusto odio dignissimos ducimus qui blanditii. </p>
                 </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">            
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 ml-auto p-0">
                <div class="banner_learn">
                    <img src="{{asset('website/assets')}}/images/banner/learnstep.jpg" alt="" class="img-fluid">
                 </div>
            </div>
        </div>
    </div>
    <div class="items_shape"></div>
    <div class="story_about">
        <div class="container">            
            <div class="row">
                <div class="col-12 col-sm-6 col-md-7 col-lg-7">
                    <div class="story_banner">
                        <img src="{{asset('website/assets')}}/images/banner/about_us.png" alt="" class="img-fluid">
                     </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="about_story_title">
                        <h2>The Srory Of Our Eduwais.</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum del Education atque corrupti.</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End about_top_wrapper -->



<section class="events-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="event_title_wrapper">  
                    <div class="sub_title">
                        <h2>Our Upcoming Events</h2>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                    </div><!-- ends: .section-header -->
                    <div class="envent_all_view">
                        <a href="#" title="">View All</a>
                    </div>
                </div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 events_full_box">
                <div class="events_single">
                    <div class="event_banner">
                        <a href="#"><img src="{{asset('website/assets')}}/images/events/event_1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="event_info">
                        <h3><a href="#" title="">OneNote for Windows 10 Essential<br> Training</a></h3>
                        <div class="events_time">
                            <span class="time"><i class="flaticon-clock-circular-outline"></i>8.00 Am - 5.00 Pm</span>
                            <span><i class="fas fa-map-marker-alt"></i>Hall - A | Broklyn Audiitorium</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet mollis dapibus arcur donec viverra to phasellus<br> eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac pena<br> tibus aenean laoreet.</p>
                        <div class="event_dete">
                            <span class="date">09</span>
                            <span>Jan</span>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="col-sm-12 events_full_box">
                <div class="events_single events_single_left">
                    <div class="event_info">
                        <h3><a href="#" title="">Magazine Design Start to Finish:<br> The Inside Pages</a></h3>
                        <div class="events_time">
                            <span class="time"><i class="flaticon-clock-circular-outline"></i>8.00 Am - 5.00 Pm</span>
                            <span><i class="fas fa-map-marker-alt"></i>Hall - A | Broklyn Audiitorium</span>
                        </div>
                         <p>Lorem ipsum dolor sit amet mollis dapibus arcur donec viverra to phasellus<br> eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac pena<br> tibus aenean laoreet.</p>
                    </div>
                    <div class="event_banner">
                        <a href="#"><img src="{{asset('website/assets')}}/images/events/event_2.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="event_dete">
                        <span class="date">15</span>
                        <span>Jan</span>
                    </div>
                </div>  
            </div>

            <div class="col-sm-12 events_full_box">
                <div class="events_single">
                    <div class="event_banner">
                        <a href="#"><img src="{{asset('website/assets')}}/images/events/event_3.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="event_info">
                        <h3><a href="#" title="">Robotic Process Automation Tech<br> Primer</a></h3>
                        <div class="events_time">
                            <span class="time"><i class="flaticon-clock-circular-outline"></i>8.00 Am - 5.00 Pm</span>
                            <span><i class="fas fa-map-marker-alt"></i>Hall - A | Broklyn Audiitorium</span>
                        </div>
                         <p>Lorem ipsum dolor sit amet mollis dapibus arcur donec viverra to phasellus<br> eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac pena<br> tibus aenean laoreet.</p>
                        <div class="event_dete">
                            <span class="date">20</span>
                            <span>Jan</span>
                        </div>
                    </div>
                </div>  
            </div>            

        </div>
    </div>
</section><!-- ./ End Events Area section -->



<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="testimonial_title">
                    <h2>Student Say About Us.</h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="testimonial_text_wrapper">
                    <div class="carousel_text slider-for">
                        <div>
                            <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque um sociis natoque pena pretium quis, sem.</p>
                            </div>
                        </div>
                        <div>
                            <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="reviewer_info">
                        <div class="carousel_images slider-nav">
                            <div class="restimonial_single_img">
                                <img src="{{asset('website/assets')}}/images/team/review_1.jpg" alt="2" class="img-fluid">
                                <div class="name_position">
                                    <span class="name">Michael Jusi</span>
                                    <span>Graphic Student</span>
                                </div>
                            </div>                    
                            <div class="restimonial_single_img">
                                <img src="{{asset('website/assets')}}/images/team/review_4.jpg" alt="2" class="img-fluid ">
                                <div class="name_position">
                                    <span class="name">Jhon Smith</span>
                                    <span>Web Student</span>
                                </div>
                            </div>                    
                            <div class="restimonial_single_img ">
                                <img src="{{asset('website/assets')}}/images/team/review_3.jpg" alt="2" class="img-fluid">
                                <div class="name_position">
                                    <span class="name">James Colins</span>
                                    <span>Graphic Student</span>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Testimonial -->



<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Our Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item single_item_first">
                    <div class="blog-img">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog_1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In <br>CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> James Colins</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                     <div class="blog-img">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog_2.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">Students work together to <br>solve a problem.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Jhon Deo</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
               <div class="single_item single_item_last">
                     <div class="blog-img">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog_3.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In <br>CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Simon Stain</span>
                        </div>               
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section><!-- End Blog  -->


<section class="our_sponsor">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Trusted To Tell Their Story</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="sponsored_company_logos">
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-1.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-2.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-3.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-4.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-5.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"></li>
                </ul>
                <ul class="sponsored_company_logos sponsored_company_logos_2">
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-6.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-7.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-8.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s"></li>
                    <li><img src="{{asset('website/assets')}}/images/logos/logo-9.png" alt="" class="img-fluid  wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"></li>
                </ul>
            </div>            
        </div>
    </div>
</section><!-- ./ End Our Sponsor -->

@endsection('main')

@push('js')

@endpush('js')