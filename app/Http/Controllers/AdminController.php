<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('admin.home');
    }
}