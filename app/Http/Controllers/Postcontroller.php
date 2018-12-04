<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Postcontroller extends Controller
{

        public function create()
        {
          return view('post.create');
        }
      
        /**
         * Сохранение новой статьи.
         *
         * @param  Request  $request
         * @return Response
         */
        public function store(Request $request)
        {
            $this->validate($request, [
                'fname' => 'required|unique:posts|max:255',
                'phone' => 'required',
                'datetoday' => 'required',
              ]);
        }
    }
    





        
    


