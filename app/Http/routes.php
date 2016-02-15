<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware'=>'web'],function(){

    //temporary, delete it when project launches
    Route::get('signin','HomeController@showLogin');

    //temporary, delete it when project launches
    Route::post('signin','HomeController@handleLogin');

    //temporary, delete it when project launches
    Route::post('signout','HomeController@handleLogout');


    Route::group(['middleware'=>'auth'],function(){

        /*
         |--------------------------------------------------------------------------
         | Client Pages Route
         |--------------------------------------------------------------------------
         |
         */
        Route::get('login', 'PagesController@showLoginPage');
        //page to input one time password
        Route::get('otp', 'PagesController@showOTPPage');
        Route::post('otp', 'AuthController@submitOTP');
        //page to check one time password
        Route::post('verify', 'AuthController@verifyOTP');
        //show client personal detail page
        Route::get('personal-detail','PagesController@showClientDetail');
        //show main page if pass authentication
        Route::get('main','PagesController@showMainPage');
        //show page date-nearby
        Route::get('date-nearby','PagesController@showDateNearnbyPage');
        Route::post('date-nearby','PagesController@handleNearbySearch');
        //show payment page
        Route::get('payment','PaymentController@showPayment');
        Route::get('bank-detail','PaymentController@showBankDetail');
        //handle payment
        Route::post('assigned-date','PaymentController@handlePayment');
        //show date-assigned page
        Route::get('assigned-date','PagesController@showAssignedDate');
        //show user profile
        Route::get('profile','PagesController@showProfile');
        //return geolocation data to ajax reqeust from map input
        Route::post('geo-data','GeolocationController@respondeGeodata');

        /*
        |--------------------------------------------------------------------------
        | Affiliate Pages Route
        |--------------------------------------------------------------------------
        |
        */
        //show affiliate task nearby page
        Route::get('task-nearby', 'PagesController@showTaskNearby');
        //show affiliate FAQ page
        Route::get('faq', 'PagesController@showFAQ');
        //show personal details page
        Route::get('apersonal-detail', 'PagesController@showAffilateDetail');
        //show affiliate profile page
        Route::get('aprofile', 'PagesController@showAffiliateProfile');
        //show make offer page
        Route::get('make-offer', 'PagesController@showOffer');
        //show task querying list page
        Route::get('task-list', 'PagesController@showTasklist');
        //show assigned task page
        Route::get('assigned-task', 'PagesController@showAssignedTask');

    });

});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
