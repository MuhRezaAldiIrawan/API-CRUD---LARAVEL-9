<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;




class BarangController extends Controller
{
    //Read All Data Barang
    public function index()
    {
        $barang = Barang::all();
        return response()->json([
            "success" => true,
            "message" => "All Data Barang",
            "data" => $barang
        ]);
    }

    // Add Data Barang
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
            'message' => 'Data Barang telah Berhasil',
            'data' => $validatedData
        ]);
    }

    //Read One Data Barang
    public function onedata($id)
    {

        $barang = Barang::find($id);
        if (is_null($barang)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([
            "success" => true,
            "message" => "One Data Barang Found",
            "data" => $barang
        ]);
    }

    //Update Data Barang
    public function updatebarang(Request $request, $id)
    {
        $barang = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'produsen' => 'required',
            'detail' => 'required',
            'foto' => 'image|file',
        ]);


        $barang = Barang::findOrFail($id);

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'produsen' => $request->produsen,
            'detail' => $request->detail,
            'foto' => $request->file('foto')->store('barang-foto')

        ]);

        $data = Barang::where('id', '=', $barang->id)->get();

        return response()->json([
            "success" => true,
            "message" => "Data Telah Berhasil Di Update",
            "data" => $data
        ]);
    }

    public function deletebarang($id)
    {
        DB::table('barangs')->where('id', $id)->delete();

        return response()->json([
            "success" => true,
            "message" => "Data Telah Berhasil Di Hapus",
        ]);
    }
}
