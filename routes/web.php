<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

/**
 * Define a group of routes with a common prefix, namespace, and alias for frontend routes.
 *
 * @param  array  $attributes
 *   An array of attributes for the route group.
 *   - 'prefix' (string): Specifies the common prefix for all routes in the group.
 *   - 'as' (string): Alias for the route group, used to generate named routes.
 *   - 'namespace' (string): The namespace for the controller class of the group.
 *
 * @param  Closure  $callback
 *   The callback function containing the route definitions for the group.
 *   Each route within this group will have the specified prefix, alias, and namespace.
 *
 * @return void
 */
Route::group(['prefix' => '/', 'as' => 'frontend.', 'namespace' => 'App\Http\Controllers\Frontend'], function () {

    /**
     * Define a route for the homepage.
     *
     * @method GET
     * @uri    /
     * @action PagesController@index
     */
    Route::get('/', "PagesController@index")->name('homepage');

    /**
     * Define a route for the 'about' page.
     *
     * @method GET
     * @uri    /about
     * @action PagesController@about
     */
    Route::get('/about', "PagesController@about")->name('about');

    /**
     * Define a route for the 'contact' page.
     *
     * @method GET
     * @uri    /contact
     * @action PagesController@contact
     */
    Route::get('/contact', "PagesController@contact")->name('contact');

    /**
     * Define a route for the 'products' page.
     *
     * @method GET
     * @uri    /products
     * @action PagesController@products
     */
    Route::get('/products', "PagesController@products")->name('products');

    /**
     * Define a route for the 'services' page.
     *
     * @method GET
     * @uri    /services
     * @action PagesController@services
     */
    Route::get('/services', "PagesController@services")->name('services');

    /**
     * Define a route for the details of a service.
     *
     * @method GET
     * @uri    /services/details
     * @action PagesController@serviceDetails
     */
    Route::get('/services/details', "PagesController@serviceDetails")->name('service-details');

    /**
     * Define a route for the 'blogs' page.
     *
     * @method GET
     * @uri    /blogs
     * @action PagesController@blogs
     */
    Route::get('/blog', "PagesController@blogs")->name('blog');

    /**
     * Define a route for the details of a blog post.
     *
     * @method GET
     * @uri    /blogs/details
     * @action PagesController@blogDetails
     */
    Route::get('/blog/details', "PagesController@blogDetails")->name('blog-details');
});



Route::get('/dashboard', function () {
    return view('dashboard.pages.home');
});
Route::get('/dashboard/login', function () {
    return view('dashboard.pages.login');
});
