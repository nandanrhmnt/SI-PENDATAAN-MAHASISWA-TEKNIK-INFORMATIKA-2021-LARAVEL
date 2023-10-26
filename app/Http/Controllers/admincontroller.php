<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pribadi;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminName = 'Admin Name';

        // Kirim data ke tampilan blade
        return view('admin.dashboard', compact('adminName'));
    }

    public function show(Pribadi $pribadi)
    {
        return view('admin.data_pribadi.pribadi', compact('pribadi'));
    }
}