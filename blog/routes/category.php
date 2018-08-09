<?php 
Route::get('/category.html','CategoryController@index')->name('category');
Route::get('category-delete/{id}','CategoryController@delete')->name('cat-delete');
Route::post('category-delete-all','CategoryController@delete_all')->name('cat-delall');

Route::get('/category-add.html','CategoryController@add')->name('cat-add');
Route::post('/category-add.html','CategoryController@post_add')->name('cat-add');

Route::get('/category-edit/{id}.html','CategoryController@edit')->name('cat-edit');
Route::post('/category-edit/{id}.html','CategoryController@post_edit')->name('cat-edit');

 ?>