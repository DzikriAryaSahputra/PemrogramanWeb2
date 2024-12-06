<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends Controller
{
    public function databuku()
    {
        return view('admin/databuku');
    }
}
