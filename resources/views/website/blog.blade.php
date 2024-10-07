@extends('layouts.website.master')

@push('title')
Blog
@endpush('title')

@push('header_classes')
header_inner blog_page
@endpush('header_classes')


@section('main')
<div class="intro_wrapper">
    <div class="container">  
        <div class="row">        
             <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="intro_text">
                    <h1>Blog Standard</h1>
                    <div class="pages_links">
                        <a href="#" title="">Home</a>
                        <a href="#" title="" class="active">Blog</a>
                    </div>
                </div>
            </div>              

        </div>
    </div> 
</div> 
</header> <!-- End Header -->

<section class="blog_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="single_blog">
                    <div class="blog_banner">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog3-1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="post_content_wrapper">
                        <div class="post_date"><p>Posted On : Feb 14 2019 - <span>Education Category</span></p></div>
                        <h3><a href="#" title="">Research of Learn training process</a></h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="post_by d-flex justify-content-between">
                            <a href="#" title="">Read More  <i class="flaticon-login-button"></i></a>
                            <div class="social_wrapper d-flex">
                                <span>Share On : </span>
                                <ul class="social-items d-flex list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                </ul>   
                            </div>
                        </div>
                        <ul class="post_bloger">
                            <li>BY : Jhon Dheo</li> 
                            <li><i class="fas fa-thumbs-up"></i> 2 Likes</li>
                            <li><i class="fas fa-comment"></i>2 Comments</li>
                        </ul>               
                    </div>
                </div>                 

                <div class="single_blog">
                    <div class="blog_banner">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog3-1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="post_content_wrapper">
                        <div class="post_date"><p>Posted On : Feb 14 2019 - <span>Education Category</span></p></div>
                        <h3><a href="#" title="">Research of Learn training process</a></h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="post_by d-flex justify-content-between">
                            <a href="#" title="">Read More  <i class="flaticon-login-button"></i></a>
                            <div class="social_wrapper d-flex">
                                <span>Share On : </span>
                                <ul class="social-items d-flex list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <ul class="post_bloger">
                            <li>BY : Jhon Dheo</li> 
                            <li><i class="fas fa-thumbs-up"></i> 2 Likes</li>
                            <li><i class="fas fa-comment"></i>2 Comments</li>
                        </ul>               
                    </div>
                </div>                  

                <div class="single_blog single_without_img">
                    <div class="post_content_wrapper">
                        <div class="post_date"><p>Posted On : Feb 14 2019 - <span>Education Category</span></p></div>
                        <h3><a href="#" title="">Research of Learn training process</a></h3>
                        <div class="post_by d-flex justify-content-between">
                            <ul class="post_bloger">
                                <li>BY : Jhon Dheo</li> 
                                <li><i class="fas fa-thumbs-up"></i> 2 Likes</li>
                                <li><i class="fas fa-comment"></i>2 Comments</li>
                            </ul> 
                            <div class="social_wrapper d-flex">
                                <span>Share On : </span>
                                <ul class="social-items d-flex list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                </ul>   
                            </div>
                        </div>

                    </div>
                </div>               

                <div class="single_blog">
                    <div class="blog_banner">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog3-2.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="post_content_wrapper">
                        <div class="post_date"><p>Posted On : Feb 14 2019 - <span>Education Category</span></p></div>
                        <h3><a href="#" title="">Research of Learn training process</a></h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="post_by d-flex justify-content-between">
                            <a href="#" title="">Read More  <i class="flaticon-login-button"></i></a>
                            <div class="social_wrapper d-flex">
                                <span>Share On : </span>
                                <ul class="social-items d-flex list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                </ul>     
                            </div>
                        </div>
                        <ul class="post_bloger">
                            <li>BY : Jhon Dheo</li> 
                            <li><i class="fas fa-thumbs-up"></i> 2 Likes</li>
                            <li><i class="fas fa-comment"></i>2 Comments</li>
                        </ul>               
                    </div>
                </div>  

                <div class="single_blog">
                    <div class="blog_banner">
                        <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/blog3-3.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="post_content_wrapper">
                        <div class="post_date"><p>Posted On : Feb 14 2019 - <span>Education Category</span></p></div>
                        <h3><a href="#" title="">Research of Learn training process</a></h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="post_by d-flex justify-content-between">
                            <a href="#" title="">Read More  <i class="flaticon-login-button"></i></a>
                            <div class="social_wrapper d-flex">
                                <span>Share On : </span>
                                <ul class="social-items d-flex list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                </ul>   
                            </div>
                        </div>
                        <ul class="post_bloger">
                            <li>BY : Jhon Dheo</li> 
                            <li><i class="fas fa-thumbs-up"></i> 2 Likes</li>
                            <li><i class="fas fa-comment"></i>2 Comments</li>
                        </ul>               
                    </div>
                </div>  

                <div class="pagination_blog">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="current"><a href="#">2</a></li>
                        <li><a href="#" class=""><i class='flaticon-right-arrow'></i></a></li>
                    </ul>
                </div>            
            </div> <!-- End Blog Right Side--->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">

                    <div class="become_a_teacher widget_single">
                        <div class="form-full-box">
                            <div class="form_title">
                                <h2>Become A Membar</h2>
                                <p>Get Instant access to <span>5000+ </span>Video courses </p>
                            </div>
                            <form>
                                <div class="register-form">
                                    <div class="row">
                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="fas fa-user"></i></label>
                                                <input class="form-control" name="name" placeholder="Write Your Name" required="" type="text">
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="flaticon-email"></i></label>
                                                <input class="form-control" name="email" placeholder="Write Your E-mail" required="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-md-12">
                                            <div class="form-group massage_text">
                                                <label><i class="flaticon-copywriting"></i></label>
                                                <textarea class="form-control" placeholder="Write Something Here" required="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-md-12 register-btn-box">
                                            <button class="register-btn" type="submit">Send Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="recent_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/side_blog_1.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="post-date">
                                    <span>May 29, 2019</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/side_blog_2.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within a Week.</a>
                                <div class="post-date">
                                    <span>25 August, 2019</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{asset('website/assets')}}/images/blog/side_blog_3.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Students work together to solve a problem.</a>
                                <div class="post-date">
                                    <span>25 August, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="archives widget_single">
                        <div class="items-title">
                            <h3 class="title">All Categories</h3>
                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Art & Design </a></li>
                                <li><a href="#" title="">Busness</a></li>
                                <li><a href="#" title="">IT & Software</a></li>
                                <li><a href="#" title="">Languages</a></li>
                                <li><a href="#" title="">Programming</a></li>                                
                                <li><a href="#" title="">Technology</a></li>
                            </ul>
                        </div>
                    </div>  

                    <div class="popular_tags widget_single">
                        <div class="items-title">
                            <h3 class="title">Popular Tags</h3>
                        </div>
                        <div class="tags-items">
                            <ul class="list-unstyled">
                                <li><a href="#" title="">Travel</a></li>
                                <li><a href="#" title="">Amazing</a></li>
                                <li><a href="#" title="">Clean</a></li>
                                <li><a href="#" title="">Responsive</a></li>
                                <li><a href="#" title="">Room</a></li>
                                <li><a href="#" title="">Travel Tips</a></li>
                                <li><a href="#" title="">Tour</a></li>
                                <li><a href="#" title="">Design</a></li>
                            </ul>
                        </div>
                    </div>  

                    <div class="twitter_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Twitter Feed</h3>
                        </div>
                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Jhothan Smith, </a> Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Willian Kane, </a>Lorem ipsum dolor simollirra. Pede phasellus eget.felis dapibus arcu donec viverra.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Michael Smith, </a> Lorem ipsum dolor sit amet mollis felPede phasellus eget.felis dapibuiverra. </p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Katie Hale, </a> Loreor sit apibus arcu donec viverra. Pede phasellus eget.felis dapibus arcu donec viverra. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ./ End  Blog Right Wrapper-->
            
        </div>
    </div> 
</section><!-- ./ End  Blog Wrapper-->
@endsection('main')