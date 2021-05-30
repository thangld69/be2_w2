<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Company;

class SearchController extends Controller
{
    public function getSearch(Request $request) {

        $per_page = $request->get('per_page');
        $name = $request->get('name');

        $obj = new Company();
       

        $companies = $obj->where('company_name', 'like', '%'.$name.'%')->paginate($per_page);
        $companies->appends(['name' =>$name]);
        return view('searchCompanies', ['companies' => $companies]);
        
    }
}
