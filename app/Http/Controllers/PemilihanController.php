<?php

namespace App\Http\Controllers;

use App\Models\Pemilihan;
use Illuminate\Http\Request;

class PemilihanController extends Controller
{
    public function index()
    {
        $pemilihans = Pemilihan::joinKandidat()->get();
        return view('admin.pemilihans.pemilihan', compact('pemilihans'));
    }
    public function create()
    {
        return view('admin.pemilihans.pemilihan_create');
    }
    public function create_action()
    {
        return redirect('/pemilihan');
    }
    public function update()
    {
        return view('admin.pemilihans.pemilihan_update');
    }
    public function update_action()
    {
        return redirect('/pemilihan');
    }
    public function delete()
    {
        return redirect('/pemilihan');
    }
}
