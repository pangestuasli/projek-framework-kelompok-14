<?php

namespace App\Http\Controllers;

use App\Models\JenisDokumen;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalJenisDokumen = JenisDokumen::count();
        $totalDokumen = 0; // Placeholder - bisa diisi dengan model dokumen jika ada
        $totalAnggota = 0; // Placeholder - bisa diisi dengan model anggota jika ada
        $totalKetua = 0; // Placeholder - bisa diisi dengan model ketua jika ada

        return view('admin.dashboard', compact(
            'totalJenisDokumen',
            'totalDokumen',
            'totalAnggota',
            'totalKetua'
        ));
    }
}
