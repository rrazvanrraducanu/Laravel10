<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index(){
      /*
        $nume="Popescu";
        $prenume="Bogdan";
        return view('pages.about', compact('nume', 'prenume'));
*/
            $people=[
                'Popescu Bogdan', 'Ionescu George', 'Mihaiescu Ion'
            ];
            return view('pages.about', compact('people'));
        }
    public function contact()
    {
        return view('pages.contact');
    }

}
