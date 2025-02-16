<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\CompanyRequest;

class CompanyController extends Controller
{
   
    public function index(): View
    {
        $companies = Company::get();

        return view('admin.companies.index', compact('companies'));
    }

    public function create(): View
    {
        return view('admin.companies.create');
    }

    public function store(CompanyRequest $request): RedirectResponse
    {
        if($request->validated()){
            $logo = $request->file('logo')->store('assets/logo','public');
            Company::create($request->except('logo') + ['logo' => $logo]);
        }

        return redirect()->route('admin.companies.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Company $company): View
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(CompanyRequest $request, Company $company): RedirectResponse
    {
        if($request->validated()){
            if ($request->logo) {
                File::delete('storage/'.$company->logo);
                $logo = $request->file('logo')->store('assets/logo','public');
                $company->update($request->except('logo') + ['logo' => $logo]);
            }else{
                $company->update($request->validated());
            }
        }

        return redirect()->route('admin.companies.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Company $company): RedirectResponse
    {
        File::delete('storage/'. $company->logo);
        $company->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}