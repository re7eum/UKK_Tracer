<?php

namespace App\Http\Controllers;

use App\Models\KuesionerKerja;
use App\Models\KuesionerKuliah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {

        return view('admin.dashboard');
    }
}
