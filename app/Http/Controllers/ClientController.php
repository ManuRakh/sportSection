<?php

namespace App;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;


use App\Feedbacks;
    class ClientController extends Controller {

        public function create()
        {
            return view('contact.create');
        }
    
        public function store(Request $request)
        {
          $Feedback = new Feedbacks;
          $this-> validate($request, [
              'phone'=>'required|max:200',
              'fname'=>'required|max:200',

          ]);
          $input = (object) $request->all();
          $data = (array) $input;    
        $Feedback->fill($data);
        $Feedback->save();
        return 'huy';

        }
}
