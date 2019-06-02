<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{


    /**
     * admin index
     */
    public function index()
    {

        return view('admin.index.index');
    }
     

     
}
