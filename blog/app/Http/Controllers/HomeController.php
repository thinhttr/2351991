<?php 
namespace App\Http\Controllers;

/**
 * summary
 */
class HomeController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        return view('home.index');
    }

     public function about()
    {
        return view('home.about');
    }

     public function contact()
    {
        return view('home.contact');
    }
}


 ?>