@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<div class="content-wrap">
    <!-- slider -->
    <div class="img-hero">
        @forelse ($banners as $banner)
        <div>
            <a href="{{$banner->url}}">
                <img src="{{$banner->banner_image}}" alt="slider">
            </a>
        </div>
        @empty
        <div>
            <img src="{{asset('assets')}}/img/slide1.jpg" alt="slider">
        </div>
        @endforelse
    </div>
    <!-- .slider -->
    <!-- section 1 -->
    <div class="home-icon">
        <div class="section-home">
            <div class="container">
                <div class="row">
                    <div class="col s-icon">
                        <a href="#" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/cab.png" alt="icon">
                            <div class="s-icon-text">
                                EBOOK
                            </div>
                        </a>
                    </div>
                    <div class="col s-icon">
                        <a href="{{ route('frontend.videos.index') }}" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/hotel.png" alt="icon">
                            <div class="s-icon-text">
                                VIDEOS
                            </div>
                        </a>
                    </div>
                    <div class="col s-icon">
                        <a href="#" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/takeoff.png" alt="icon">
                            <div class="s-icon-text">
                                QUIZ
                            </div>
                        </a>
                    </div>
                    <div class="col s-icon">
                        <a href="{{ route('frontend.posts.index') }}" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/train.png" alt="icon">
                            <div class="s-icon-text">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s-icon">
                        <a href="#" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/temple.png" alt="icon">
                            <div class="s-icon-text">
                                CITY GUIDE
                            </div>
                        </a>
                    </div>
                    <div class="col s-icon">
                        <a href="#" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/hospital.png" alt="icon">
                            <div class="s-icon-text">
                                HOSPITAL
                            </div>
                        </a>
                    </div>
                    <div class="col s-icon">
                        <a href="#" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/cultures.png" alt="icon">
                            <div class="s-icon-text">
                                EVENT
                            </div>
                        </a>
                    </div>
                    <div class="col s-icon">
                        <a href="#" class="homepage-icon-menu">
                            <img src="{{asset('assets')}}/img/gps.png" alt="icon">
                            <div class="s-icon-text">
                                INTERCITY
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section 1 -->
    <!-- section 2 -->
    <div class="heading-section">
        <div class="sa-title popcat">Car Available </div>
        <div class="heading-info">
            Choose your favorite car
        </div>
        <div class="clear"></div>
    </div>
    <div class="section-home available-car">

        <div class="default-carousel car-carousel">
            <!-- item -->
            <div class="item">
                <div class="acr-box">
                    <div class="acr-box-in">
                        <div class="acr-img">
                            <img src="{{asset('assets')}}/img/car2-nissan3.png" alt="you might like">
                        </div>
                        <div class="acr-content">
                            <div class="ct-name">Nissan Juke</div>
                            <div class="ct-cost"><span class="cprice"> $120 </span><span class="perday">rent per day</span></div>

                            <div class="ct-reserve">
                                <a href="car_single.html" class="theme-button">
                                    Reserve Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acr-bg">
                        <img src="{{asset('assets')}}/img/bgcar.jpg">
                    </div>
                </div>
            </div>
            <!-- .item -->
            <!-- item -->
            <div class="item">
                <div class="acr-box">
                    <div class="acr-box-in">
                        <div class="acr-img">
                            <img src="{{asset('assets')}}/img/car2-kia1.png" alt="you might like">
                        </div>
                        <div class="acr-content">
                            <div class="ct-name">KIA Rio</div>
                            <div class="ct-cost"><span class="cprice"> $120 </span><span class="perday">rent per day</span></div>

                            <div class="ct-reserve">
                                <a href="car_single.html" class="theme-button">
                                    Reserve Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acr-bg">
                        <img src="{{asset('assets')}}/img/bgcar.jpg">
                    </div>
                </div>
            </div>
            <!-- .item -->
            <!-- item -->
            <div class="item">
                <div class="acr-box">
                    <div class="acr-box-in">
                        <div class="acr-img">
                            <img src="{{asset('assets')}}/img/car2-mitsubishi2.png" alt="you might like">
                        </div>
                        <div class="acr-content">
                            <div class="ct-name">Mitsubishi Xpander </div>
                            <div class="ct-cost"><span class="cprice"> $120 </span><span class="perday">rent per day</span></div>

                            <div class="ct-reserve">
                                <a href="car_single.html" class="theme-button">
                                    Reserve Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acr-bg">
                        <img src="{{asset('assets')}}/img/bgcar.jpg">
                    </div>
                </div>
            </div>
            <!-- .item -->
        </div>
    </div>
    <!-- .section 2-->
    <!-- section 3 -->
    <div class="heading-section">
        <div class="sa-title popcat">Popular Videos
        </div>
        <div class="heading-info">
            Popular videos, Updated Videos
        </div>
        <div class="clear"></div>
    </div>
    <div class="section-home vacation-destination">
        <div class="default-carousel vs-carousel">
            <!-- item -->
            @foreach ($videos as $video)
            <div class="item">
                <div class="vs-box">
                    <div class="vsb-top">
                        <div class="vsb-rating">
                            4.8 <i class="fas fa-star"></i>
                        </div>
                        <div class="vsbt-img">
                            {!!$video->video_url!!}
                        </div>
                    </div>
                    <div class="vsb-middle">
                        <div class="vsbm-left">
                            {{$video->name}}
                        </div>
                        <div class="vsbm-right">
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- .item -->
        </div>
    </div>
    <!-- .section 3 -->
    <!-- section 4 -->
    <div class="heading-section">
        <div class="sa-title popcat">Latest Articles </div>
        <div class="heading-info">
            Latest articles, hot news
        </div>
        <div class="clear"></div>
    </div>
    <div class="section-home home-news">

        <div class="home-news-wrap">
            @foreach ($posts->take(4) as $post)
            <a href="{{route('frontend.posts.show',[encode_id($post->id), $post->slug])}}">
                <div class="news-item">
                    <div class="news-content">
                        <div class="hnw-img">
                            <img src="{{$post->featured_image}}" alt="{{$post->name}}">
                        </div>
                        <div class="hnw-desc">
                            <div class="hnw-title">{{$post->name}}</div>
                            <div class="hnw-text">
                                {{$post->intro}} <span class="more"> Read More</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            <div class=" more-category">
                <a href="news_list.html">
                    <div class="theme-button mcbutton">More News</div>
                </a>
            </div>
        </div>
    </div>
    <!-- .section 4 -->

    <!-- SUBSCRIBE -->
    <div class="section-subscribe">
        <div class="subcontainer">
            <div class="subrow">
                <div class="subcol">
                    <div class="section-title">SUBSCRIBE</div>
                    <p class="textsub">Signup for our weekly newsletter to get the latest news, updates and amazing offers</p>
                    <div class="mail-subscribe-box">
                        <form name="subsribe">
                            <input class="form-control" name="user-email" placeholder="Enter email address" value="" type="email">
                            <button type="submit" class="submitsub"> <i class="fa fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-subscribe">
            <img src="{{asset('assets')}}/img/image.jpg" alt="banner">
        </div>
    </div>
    <!-- END SUBSCRIBE -->
    @endsection