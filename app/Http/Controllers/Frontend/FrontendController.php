<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Modules\Article\Models\Post;
use Modules\Banner\Models\Banner;
use Modules\Video\Models\Video;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::where('status', 1)->get();
        $posts = Post::latest()->get();
        $videos = Video::where('status', 1)->paginate();

        return view('frontend.index', compact('banners', 'posts', 'videos'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('frontend.terms');
    }
}
