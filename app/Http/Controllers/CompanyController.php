<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Question;
use App\Models\Outcome;

class CompanyController extends Controller
{
    public function index(){
        return view('admin.company.index', [
            'companies' => Company::all(),
        ]);
    }

    public function show(Company $company){
        return view('admin.company.show', [
            'company' => $company,
        ]);
    }

    public function create(){
        return view('admin.company.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        Company::create($validated);
        return redirect()->back()->with('status', 'Company Successfully Added');  
    }

    public function edit(Company $company){
        return view('admin.company.edit', [
            'company' => $company,
        ]);
    }

    public function update(Request $request, Company $company){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $company->update($validated);
        return redirect()->back()->with('status', 'Company Successfully Updated');  
    }
    
    public function destroy(Company $company){
        $company->delete();
        return redirect()->back()->with('status', 'Company Removed!');
    }
}
