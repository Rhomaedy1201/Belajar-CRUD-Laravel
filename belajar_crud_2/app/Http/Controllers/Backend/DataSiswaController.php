<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $data_siswa = DataSiswa::get();
        return view('backend.data_siswa.index', compact('data_siswa'));
    }

    public function create()
    {
        $data_siswa = null;
        return view('backend.data_siswa.create', compact('data_siswa'));
    }

    public function store(Request $request)
    {
        DataSiswa::create($request->all());
        return redirect()->route('data_siswa.index')->with('success', 'Data data_siswa baru berhasil disimpan');
    }

    public function edit(DataSiswa $data_siswa)
    {
        return view('backend.data_siswa.create', compact('data_siswa'));
    }

    public function update(Request $request, DataSiswa $data_siswa)
    {
        $data_siswa->update($request->all());
        return redirect()->route('data_siswa.index')->with('success', 'data_siswa berhasil diperbarui');
    }

    public function destroy(DataSiswa $data_siswa)
    {
        $data_siswa->delete();
        return redirect()->route('data_siswa.index')->with('success', 'Data data_siswa berhasil dihapus');
    }


}