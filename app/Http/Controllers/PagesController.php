<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Authy\AuthyApi;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function showLoginPage(){
        return view('auth.login');
    }

    public function showOTPPage(){
        return view('auth.otp');
    }

    public function showMainPage(){
        return view('main');
    }

    public function handleNearbySearch(){
        return view('date-nearby');
    }

    public function showDateNearnbyPage(){
        return view('date-nearby');
    }

    public function showAssignedDate(){
        return view('assigned-date');
    }

    /**
     * show user profile page
     * @return View
     */
    public function showProfile(){
        return view ('profile');
    }

    /**
     * show affiliate task nearby page
     * @return View
     */
    public function showTaskNearby(){
        return view ('affiliate.task-nearby');
    }

    /**
     * show affiliate FAQ page
     * @return View
     */
    public function showFAQ(){
        return view ('affiliate.faq');
    }

    /**
     * show personal details page
     * @return View
     */
    public function showPersonalDetail(){
        return view('affiliate.personal-detail');
    }

    /**
     * show affiliate profile page
     * @return View
     */
    public function showAffiliateProfile(){
        return view('affiliate.profile');
    }

    /**
     * show affiliate profile page
     * @return View
     */
    public function showOffer(){
        return view('affiliate.make-offer');
    }

    /**
     * show task querying list
     * @return View
     */
    public function showTasklist(){
        return view('affiliate.task-list');
    }

    /**
     * show task querying list
     * @return View
     */
    public function showAssignedTask(){
        return view('affiliate.assigned-task');
    }
}
