<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Category::with('jobs')->get();
        $testimonials = Testimonial::get();
        $jobs = Job::with('category', 'company')->get();
        return view('frontend.homepage', compact('categories', 'jobs', 'testimonials'));
    }
}
