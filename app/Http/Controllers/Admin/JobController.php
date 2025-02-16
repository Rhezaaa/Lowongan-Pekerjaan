<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\JobRequest;

class JobController extends Controller
{
   
    public function index(): View
    {
        $jobs = Job::get();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create(): View
    {
        $categories = Category::get();
        $companies = Company::get();

        return view('admin.jobs.create', compact('categories', 'companies'));
    }

    public function store(JobRequest $request): RedirectResponse
    {
        $slug = Str::slug($request->title, '-');
        Job::create($request->validated() + ['slug' => $slug]);

        return redirect()->route('admin.jobs.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Job $job): View
    {
        $categories = Category::get();
        $companies = Company::get();

        return view('admin.jobs.edit', compact('job', 'categories', 'companies'));
    }

    public function update(JobRequest $request, Job $job): RedirectResponse
    {
        $slug = Str::slug($request->title, '-');
        $job->update($request->validated() + ['slug' => $slug]);

        return redirect()->route('admin.jobs.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}