<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Mahasiswa\Pribadi; 

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminName = 'Admin Name';

        // Kirim data ke tampilan blade
        return view('admin.dashboard', compact('adminName'));
    }

    public function datapribadimhs()
    {
        // Ambil data pribadi mahasiswa dari model Pribadi
        $pribadi = Pribadi::all();

        // Kirim data ke tampilan blade
        return view('admin.datapribadimhs', compact('pribadi'));
    }
}
