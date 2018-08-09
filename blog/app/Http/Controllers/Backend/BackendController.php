<?php 
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
/**
 * summary
 */
class BackendController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        return view('backend.index');
    }
}

?>