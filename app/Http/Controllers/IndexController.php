<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\FitnessProgramm;
use App\client;
use App\room;
use App\trainer;
use App\Instructor;
use App\Event;
class IndexController extends Controller
{
    public function index()
    {
        $fprogramm = FitnessProgramm::select('id','name','price','shortdesc','description','img')->where('id','>','2')->get();
        $event = Event:: select('id','name','address', 'organizer')->get();
        $clients = client:: select('id','name','count')->get();
        $Instructors = Instructor:: select('id', 'name','job')->get();
        return view('index')->with(
            [
                'fprogramm'=>$fprogramm,
                'clientcount' =>$clients,
               'Instructorinf' =>$Instructors,
               'events'=>$event,
            ]
            
        );
    }
}