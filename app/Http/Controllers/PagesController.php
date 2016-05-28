<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home()
    {
    return view('/pages/home');
    }

    public function work()
    {
    return view('/pages/work');
    }

    public function contact()
    {
    return view('/pages/contact');
    }

    public function touchscreen()
    {
    return view('/pages/touchscreen');
    }

    public function msSearch()
    {
    return view('/pages/msSearch');
    }

    public function zune()
    {
    return view('/pages/zune');
    }

    public function xbox()
    {
    return view('/pages/xbox');
    }

    public function bannerAds()
    {
    return view('/pages/bannerAds');
    }

    public function heavymetal()
    {
    return view('/pages/heavymetal');
    }

    public function trifold()
    {
    return view('/pages/trifold');
    }

    public function wvposter()
    {
    return view('/pages/wvposter');
    }
}




