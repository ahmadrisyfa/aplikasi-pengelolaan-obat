<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\JenisObat;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $DataObat = Obat::orderBy('tgl_exp', 'asc')->get();
        $JumlahObat = Obat::all()->count();
        $JumlahObatSudahExpired = Obat::where('tgl_exp', '<=', now())->count();
        $JumlahObatBelumExpired = Obat::where('tgl_exp', '>=', now())->count();
        $JumlahJenisObat = JenisObat::all()->count();
        $JumlahUser = User::all()->count();
        $JumlahUserActive = User::where('is_active', 1)->get()->count();
        $JumlahUserBelumActive = User::where('is_active', 0)->get()->count();
        return view('dashboard.index',compact('DataObat','JumlahObat','JumlahObatSudahExpired','JumlahObatBelumExpired','JumlahJenisObat','JumlahUser','JumlahUserActive','JumlahUserBelumActive'));        
    }
}
