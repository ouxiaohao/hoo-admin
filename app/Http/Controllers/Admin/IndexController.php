<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Common\AdminBaseController;

class IndexController extends AdminBaseController
{

    /**
     * admin index
     */
    public function index()
    {

        return view('admin.index.index');
    }
     

     
}
