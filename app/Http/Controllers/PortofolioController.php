<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioResume;

class PortofolioController extends Controller
{
    public function index()
    {
        $resumes = PortofolioResume::all(); 
        return view('Porto.index', compact('resumes'));
    }

    // Menampilkan halaman form create
    public function create()
    {
        return view('Porto.create'); 
    }

    // Menyimpan data dari form ke database
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
            $data['foto'] = $fileName;
        }

        $data['show_foto'] = $request->has('show_foto') ? 1 : 0;

        PortofolioResume::create($data);
        return redirect('/portofolio'); // Kembali ke halaman tabel setelah menyimpan
    }

    // Menghapus data
    public function destroy($id)
    {
        PortofolioResume::find($id)->delete();
        return redirect('/portofolio');
    }

    public function edit($id)
    {
        $resume = PortofolioResume::find($id);
        return view('Porto.edit', compact('resume'));
    }

    // Menyimpan pembaruan data ke database
    public function update(Request $request, $id)
    {
        $resume = PortofolioResume::find($id);
        $resume->update($request->all());
        
        return redirect('/portofolio');
    }

    public function updateFoto(Request $request)
    {
        // Ambil data profil pertama atau buat record baru jika belum ada
        $profile = PortofolioResume::first(); 
        if (!$profile) {
            $profile = new PortofolioResume();
        }

        // Update field text profil (menggunakan kolom judul & deskripsi yang ada, atau simpan ke field request)
        $profile->judul = $request->input('name', $profile->judul);
        // Jika kamu punya kolom khusus di tabel portofolio_1106, masukkan ke sini:
        // $profile->deskripsi = $request->input('profile_desc', $profile->deskripsi);

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
            $profile->foto = $fileName;
        }

        // Toggle include (1) / exclude (0)
        $profile->show_foto = $request->has('show_foto') ? 1 : 0;
        $profile->save();

        return redirect()->back();
    }

    
}