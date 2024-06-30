<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{

    public function index()
    {
        $data = [
            'kandidats' => Kandidat::all(),
            'title' => 'Kandidat'
        ];

        return view('admin.kandidats.kandidat', $data);
    }

    public function create()
    {
        return view('admin.kandidats.kandidat_create');
    }
    public function create_action(Request $request)
    {

        $token = uniqid(20);
        $getGambar = $request->file('gambar');
        $getBerkas = $request->file('berkas');
        $file_gambar = $token . '.' . $getGambar->getClientOriginalExtension();
        $file_berkas = $token . '.' . $getBerkas->getClientOriginalExtension();

        $data = [
            'nama' => $request->nama,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'domisili' => $request->domisili,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'angkatan' => $request->angkatan,
            'file_pdf' => $file_berkas,
            'gambar' => $file_gambar,
            'no_whatsapp' => $request->no_whatsapp,
            'email' => $request->email,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
        ];


        $getBerkas->storeAs('foto_kandidats' . $file_gambar);
        $getBerkas->storeAs('berkas_file' . $file_berkas);

        Kandidat::create($data);

        return redirect('/kandidat');
    }
    public function update($id)
    {
        Kandidat::where('id', $id)->first();
        return view('admin.kandidats.kandidat_create');
    }
    public function update_action(Request $request, $id)
    {
        $token = uniqid(20);
        $getGambar = $request->file('gambar');
        $getBerkas = $request->file('berkas');
        $file_gambar = $token . '.' . $getGambar->getClientOriginalExtension();
        $file_berkas = $token . '.' . $getBerkas->getClientOriginalExtension();

        $data = [
            'nama' => $request->nama,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'domisili' => $request->domisili,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'angkatan' => $request->angkatan,
            'file_pdf' => $file_berkas,
            'gambar' => $file_gambar,
            'no_whatsapp' => $request->no_whatsapp,
            'email' => $request->email,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,

        ];

        file_exists($file_berkas);
        ($file_berkas);

        Kandidat::where('id', $id)->update($data);
        return redirect('/kandidat');
    }


    public function delete($id)
    {
        Kandidat::where('id', $id)->delete();
        return redirect('/kandidat');
    }
}
