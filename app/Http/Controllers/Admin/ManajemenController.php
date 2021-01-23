<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ManajemenController extends Controller {
    public function indexPegawai() {

        $pegawai = DB::select('SELECT * FROM pegawai');

        $data = array(
            'pegawai' => $pegawai
        );

        return view('admin.manajemen.pegawai', $data);
    }

    public function indexBidang() {

        $bidang = DB::select('SELECT * FROM bidang');

        $data = array(
            'bidang' => $bidang
        );

        return view('admin.manajemen.bidang', $data);
    }

    public function indexJabatan() {

        $jabatan = DB::select('SELECT * FROM jabatan');

        $data = array(
            'jabatan' => $jabatan
        );

        return view('admin.manajemen.jabatan', $data);
    }

    
    public function indexAtasan() {

        $atasan = DB::select('SELECT * FROM atasan');

        $data = array(
            'atasan' => $atasan
        );

        return view('admin.manajemen.atasan', $data);
    }

    public function indexKegiatan() {

        $kegiatan = DB::select('SELECT * FROM kegiatan');

        $data = array(
            'kegiatan' => $kegiatan
        );

        return view('admin.manajemen.kegiatan', $data);
    }

    public function indexUser() {

        $user = DB::select('SELECT * FROM user');

        $data = array(
            'users' => $user
        );

        return view('admin.manajemen.user', $data);
    }
}