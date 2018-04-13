<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Post;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    //
    public function index(){
        return view('index')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(4)->get())
            ->with('posts', Post::take(8)->get())
//            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
//            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
//            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
//            ->with('career', Category::find(7))
//            ->with('tutorials', Category::find(6))
            ->with('settings', Setting::first());
    }

    public function about(){
        return view('about')
            ->with('title', Setting::first()->site_name)
            ->with('settings', Setting::first());
    }

    public function lapor(){
        return view('lapor')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::all())
            ->with('cities', City::all())
            ->with('settings', Setting::first());
    }

    public function lokasi(){
        return view('lokasi')
            ->with('title', Setting::first()->site_name)
            ->with('cities', City::take(4)->get())
            ->with('posts', Post::take(8)->get())
            ->with('settings', Setting::first());
    }

    public function profile(){
        $profile = User::where('id', Auth::id())->first()->profile;

        $splitName = explode(' ', $profile->user->name, 2); // Restricts it to only 2 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $last_name = !empty($splitName[1]) ? $splitName[1] : '';

        return view('profile')
            ->with('title', Setting::first()->site_name)
            ->with('profile', $profile)
            ->with('first_name', $first_name)
            ->with('last_name', $last_name)
            ->with('settings', Setting::first());
    }

    public function signup(){
        return view('signup')
            ->with('title', Setting::first()->site_name)
            ->with('settings', Setting::first());
    }

    public function signin(){
        return view('signin')
            ->with('title', Setting::first()->site_name)
            ->with('settings', Setting::first());
    }
}
