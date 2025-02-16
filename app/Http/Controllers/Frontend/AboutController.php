<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $testimonials = Testimonial::get();

        return view('frontend.about', compact('testimonials'));
    }
}
