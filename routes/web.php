<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/




Route::get('/',[
	'uses' =>'frontController@index',
	'as' => '/'
]);

Route::get('/contact',[
'uses' =>'frontController@contact',
'as' => 'contact'

]);

Route::get('/single/{id}/{cat}/{name}',[
'uses' =>'frontController@singlePost',
'as' => 'singlePost'

]);

Route::get('/categoryhome/{id}/{name}',[
'uses' =>'frontController@category',
'as' => 'homecategory'

]);

/*userlogin*/
Route::get('/signup',[
	'uses' => 'frontController@Customerauth',
	'as' => 'signup'
]);

Route::post('/createCustomer',[
	'uses' => 'frontController@CustomerCreate',
	'as' => 'newCustomer'
]);

Route::post('/customerlogin',[
	'uses' => 'frontController@LoginCustomer',
	'as' => 'customerLogin'
]);

Route::post('/customerlogout',[
	'uses' => 'frontController@LogoutCustomer',
	'as' => 'custLogout'
]);

Route::get('/page/{id}',[
	'uses' => 'frontController@Page',
	'as' => 'pageroute'
]);

Route::post('/contact',[
	'uses' => 'ContactController@index',
	'as' => 'contactsend'
]);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Admin Admin Admin Admin Admin Admin Admin Admin Admin*/

Route::group(['middleware' => 'loginmiddleware'],function(){

		/*category*/
		Route::get('/admin/category',[
			'uses' => 'categoryController@index',
			'as' => 'category'
		]);

		Route::get('/admin/category/add',[
			'uses' => 'categoryController@CategoryAdd',
			'as' => 'addCategory'
		]);
		Route::post('/admin/category/save',[
			'uses' => 'categoryController@CategorySave',
			'as' => 'addCat'
		]);
		Route::get('/admin/category/edit/{id}',[
			'uses' => 'categoryController@EditCategory',
			'as' => 'editCat'
		]);
		Route::post('/admin/category/update/',[
			'uses' => 'categoryController@UpdateCategory',
			'as' => 'updateCat'
		]);

		Route::get('/admin/category/delete/{id}',[
			'uses' => 'categoryController@DeleteCategory',
			'as' => 'deleteCat'
		]);

		Route::get('/admin/category/unpublish/{id}',[
			'uses' => 'categoryController@UnpublishCat',
			'as'=>'unpubCat'
		]);
		Route::get('/admin/category/publish/{id}',[
			'uses' => 'categoryController@publishCat',
			'as'=>'pubCat'
		]);
		/*End Category*/



		/*Posts*/
		Route::get('/admin/post',[
			'uses' => 'PostController@index',
			'as'=>'posts'
		]);

		Route::post('/admin/post/save',[
			'uses' => 'PostController@SavePost',
			'as'=>'newPost'
		]);

		Route::get('/admin/post/edit/{id}',[
			'uses' => 'PostController@EditPost',
			'as' => 'editPost'
		]);
		Route::post('/admin/post/update',[
			'uses' => 'PostController@PostUpdate',
			'as' => 'updatePost'
		]);
		Route::get('/admin/post/delete/{id}',[
			'uses' => 'PostController@PostDelete',
			'as' => 'deletepost'
		]);

		Route::get('admin/post/unpublishpost/{id}',[
			'uses' => 'PostController@UnpubPost',
			'as' => 'unpubPost'
		]);
		Route::get('admin/post/publishpost/{id}',[
			'uses' => 'PostController@pubPost',
			'as' => 'pubPost'
		]);


		/*pages*/
		Route::get('admin/page',[
			'uses' => 'pageController@index',
			'as' => 'pages'
		]);
		Route::get('admin/page/create',[
			'uses' => 'pageController@PageCreate',
			'as' => 'addPage'
		]);

		Route::post('admin/page/add',[
			'uses' => 'pageController@SavePage',
			'as' => 'createPage'
		]);
		Route::get('admin/page/edit/{id}',[
			'uses' => 'pageController@PageEdit',
			'as' => 'editpage'
		]);

		Route::post('admin/page/update',[
			'uses' => 'pageController@UpdatePage',
			'as' => 'pageUpdate'
		]);

		Route::get('admin/page/delete/{id}',[
			'uses' => 'pageController@PageDelete',
			'as' => 'deletePage'
		]);

		Route::get('admin/page/unpublish/{id}',[
			'uses' => 'pageController@UnpublishPage',
			'as' => 'unpubPage'
		]);
		Route::get('admin/page/publish/{id}',[
			'uses' => 'pageController@publishPage',
			'as' => 'pubPage'
		]);


		/*Message*/
		Route::get('/message/{id}',[
			'uses' => 'ContactController@SingleMessage',
			'as' => 'singlemessage'
		]);

		Route::get('/message',[
			'uses' => 'ContactController@MessageAll',
			'as' => 'allmessage'
		]);

		Route::get('/messagedelte/{id}',[
			'uses' => 'ContactController@MessageDelete',
			'as' => 'deletemsg'
		]);

		Route::post('/message/send',[
			'uses' => 'ContactController@MessageSend',
			'as' => 'replymsg'
		]);




		Route::get('/notification', 'ContactController@notification');
		Route::get('/notification_update', 'ContactController@notification_update');


		/*user*/
});