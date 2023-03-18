<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function addbarang(Request $request)
    {

        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'produsen' => 'required',
            'detail' => 'required',
            'foto' => 'image|file',
      

        ]);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('barang-foto');
        }
        Barang::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Data Barang telah berhasil ditambahkan',
            'data' => $validatedData
        ]);

    }

}
