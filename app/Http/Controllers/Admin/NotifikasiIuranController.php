<?php

namespace App\Http\Controllers\Admin;

use App\Models\NotifikasiIuran;
use App\Models\Iuran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotifikasiIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifiuran = NotifikasiIuran::with('iuran')->get();

        $breadcrumb = (object)[
            'judul' => 'Admin ',
            'list' => 'Data Notifikasi Iuran'
        ];

        return view('admin.manage.notifIuran', compact('notifiuran', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $iuran = Iuran::select('id_iuran', 'nama_iuran')->get();
        $breadcrumb = (object)[
            'judul' => 'Admin / Data Notifikasi Iuran',
            'list' => '/ Insert Notifikasi Iuran'
        ];

        return view('admin.manage.insertNotifikasi', compact('iuran','breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string',
        'id_iuran' => 'required|numeric',
        'nominal' => 'required|numeric', 
        'informasi' => 'nullable|string', 
        'tanggal' => 'required|date',
    ]);

    NotifikasiIuran::create($request->only(['judul', 'id_iuran', 'nominal', 'informasi', 'tanggal']));

    return redirect()->route('viewNotif')->with('success', 'Notifikasi telah ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(NotifikasiIuran $notifikasiIuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id_notifikasi)
    {
        $iuran = Iuran::select('id_iuran', 'nama_iuran')->get();
        if (!preg_match('/^\d+$/', $id_notifikasi)) {
            // Tambahkan logika untuk menangani kesalahan validasi
            return redirect()->back()->withErrors(['id_notifikasi' => 'Notifikasi tidak valid.']);
        }
        $notif = NotifikasiIuran::findOrFail($id_notifikasi);
        
        $breadcrumb = (object)[
            'judul' => 'Admin / Data Notifikasi Iuran /',
            'list' => ' Edit Notifikasi'
        ];

        return view('admin.manage.editNotif', compact('notif', 'breadcrumb', 'iuran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id_notifikasi)
    {
        if (!preg_match('/^\d+$/', $id_notifikasi)) {
            // Tambahkan logika untuk menangani kesalahan validasi
            return redirect()->back()->withErrors(['id_notifikasi' => 'Notifikasi tidak valid.']);
        }
    
        // Validasi input request
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'id_iuran' => 'required|numeric',
            'nominal' => 'required|numeric', 
            'informasi' => 'nullable|string', 
            'tanggal' => 'required|date',
        ]);
    
        // Temukan Kartu Keluarga berdasarkan nik_kk, atau gagal jika tidak ditemukan
        $notif = NotifikasiIuran::findOrFail($id_notifikasi);
    
        // Update data Kartu Keluarga
        $notif->update($validatedData);
    
        // Redirect ke route 'viewkk' dengan pesan sukses
        return redirect()->route('viewNotif')->with('success', 'Notifikasi Iuran telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifikasiIuran $notifikasiIuran)
    {
        //
    }
}
