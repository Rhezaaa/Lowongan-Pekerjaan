<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JoblistController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::with(['category', 'company'])->paginate(1);
        $categories = Category::get();

        return view('frontend.joblist.index', compact('jobs', 'categories'));
    }

    public function show(Job $job)
    {
        return view('frontend.joblist.detail', compact('job'));
    }

    public function category (Category $category)
    {
        $jobs = Job::with(['category', 'company'])->where ('category_id', $category->id)->paginate(1);
        $categories = Category::with('jobs')->get();

        return view('frontend.joblist.index', compact('jobs', 'categories', 'category'));
    }
        
}
