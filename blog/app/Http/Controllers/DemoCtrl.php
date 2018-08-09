<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * summary
 */
class DemoCtrl  extends Controller
{
    /**
     * summary
     */
    public function demo_form(){
    	return view('demo.form');
    }

     public function post_form(Request $req){
     	$data = [];
     	
     	if (count($req->product_id) && count($req->quantity)) {
     		for ($i = 0; $i < count($req->product_id); $i++) {
     			$data[] = [
     				'product_id' => $req->product_id[$i],
     				'quantity' => $req->quantity[$i]
     			];
     		}
     	}

    	dd($data);
    }
}
 ?>