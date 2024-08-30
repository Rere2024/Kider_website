<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
         return view('index');
     }

     public function about()
     {
          return view('about');
      }

      public function appointment()
      {
           return view('appointment');
       }

       public function call()
       {
            return view('call');
        }
 
        public function classes()
        {
             return view('classes');
         }
  
         public function contact()
         {
              return view('contact');
          }
   
          public function facility()
          {
               return view('facility');
           }
    
           public function team()
           {
                return view('team');
            }

            public function testimonial()
            {
                 return view('testimonial');
             }


}
