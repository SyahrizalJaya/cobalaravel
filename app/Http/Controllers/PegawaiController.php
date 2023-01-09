<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $pegawai = DB::table('pegawai')->where('pegawai_nama', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $pegawai = DB::table('pegawai')->paginate(5);
        }
        return view('pegawai', ['pegawai' => $pegawai]);
    }
}