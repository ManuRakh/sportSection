<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\FitnessProgramm;
class IndexController extends Controller
{
    public function index()
    {
        $fprogramm = FitnessProgramm::select('id','name','price','shortdesc','description','img')->where('id','>','2')->get();
        
        return view('index')->with(
            [
                'fprogramm'=>$fprogramm,
            ]
            
        );
    }
}