<?php 
namespace App\Http\Controllers;

/**
 * summary
 */
class HelloCtrl  extends Controller
{
    /**
     * summary
     */
    public function hello($n,$age){
    	return view('demo.hello',[
    		'name' => $n,
    		'age' => $age
    	]);
    }
}
 ?>