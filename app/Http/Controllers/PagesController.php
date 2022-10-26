<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function goToPage(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function search(){
        return view('pages.search');
    }
    public function jobPost(){
        return view('pages.jobPost');   
    }
    public function apply(){
        return view('pages.apply');   
    }
    public function talentAccountPage(){
        return view('pages.talentAccountPage');
    }
}
