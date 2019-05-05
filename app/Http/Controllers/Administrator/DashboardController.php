<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 3:31 PM
 */

namespace App\Http\Controllers\Administrator;


use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index(Request $request)
    {
        return view('administrator.dashboard');
    }
}