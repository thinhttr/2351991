<?php 
namespace App\Http\Controllers;

use App\Models\Category;
/**
 * summary
 */
class CategoryController extends Controller
{
    /**
     * summary
     */
    public function cat_list()
    {
        // goi model Category
        $datas = Category::paginate(3);
    	// goi view
        return view('cat_list',[
            'cats' => $datas
        ]);
    }

    public function add()
    {
        
    }

     public function delete()
    {
        echo 'Xoa danh muc';
    }
}

?>