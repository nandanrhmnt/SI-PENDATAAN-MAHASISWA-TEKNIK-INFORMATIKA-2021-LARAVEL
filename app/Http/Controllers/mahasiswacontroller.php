<?php

namespace App\Http\Controllers;

use App\Http\Models\mahasiswa;
use App\Pribadi as AppPribadi;
use CreatePribadiTable;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = CreatePribadiTable::all();
        return view('pribadi.blade', compact('mahasiswa'));
    }

    public function show($id)
    {
        $mahasiswa = CreatePribadiTable::find($id);
        return view('pribadi.show', compact('pribadi'));
    }
}
