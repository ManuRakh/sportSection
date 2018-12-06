<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        setlocale(LC_TIME, 'ru_RU.UTF-8');
        $ru_month = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
        $en_month = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        
        $blogs = Blog::paginate(9);
        $i=0;           
   $j=0;
if((date("M",strtotime($blogs[1]->date)=="Jun")))
{
   // $blogs[1]->month = "Июнь";
}
foreach($blogs as $blog)
{
$blogs[$j]->month = date("M",strtotime($blogs[$j]->date));
$blogs[$j]->month =  str_replace($en_month,$ru_month,$blogs[$j]->month);
$j++;
}
  
        return view('blog')->with(
            [
                'blogs' => $blogs,
                'i'=>$i,
            ]
        );
    }


}
