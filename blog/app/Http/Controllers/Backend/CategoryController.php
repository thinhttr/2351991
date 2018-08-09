<?php 
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
/**
 * summary
 */
class CategoryController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
    	//$cats = Category::all();// select * from category;
    	//$cats = Category::where('status',1)->get();// SELECT * FROM category WHERE status = 1
    	$cats = Category::paginate(10);// SELECT * FROM category LIMIT 0,10
        return view('backend.category.index',
        	[
        		'datas' => $cats
       	 	]
    	);
    }

    public function add(){
    	return view('backend.category.add');
    }

    public function post_add(Request $req)
    {

    	Category::create($req->all());

    	return redirect()->route('category')->with('success',"Created category sucessffuly");
    }


     public function edit($id){
     	$model = Category::find($id);

    	return view('backend.category.edit',[
    		'model' => $model
    	]);
    }

    public function post_edit($id,Request $req)
    {

    	Category::find($id)->update($req->all());

    	return redirect()->route('category')->with('success',"Created category sucessffuly");
    }




    public function delete($id)
    {
    	Category::find($id)->delete(); //DELETE from category WHERE id = $id
    	//Category::destroy($id);// DELETE from category WHERE id IN($id)
    	return redirect()->back()->with('success',"Delete category sucessffuly");

    }

    public function delete_all(Request $req)
    {
    	Category::destroy($req->id);// DELETE from category WHERE id IN($id)
    	return redirect()->back()->with('success',"Delete category sucessffuly");
    }
}

?>