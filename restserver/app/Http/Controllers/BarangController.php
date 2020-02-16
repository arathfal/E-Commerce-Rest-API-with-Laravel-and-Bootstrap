<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function get()
    {
        $barang = Barang::with(['kategori', 'user'])->orderBy('created_at', 'DESC')->get();

        return response()->json([
            'status' => 'Success',
            'data'   => $barang
        ]);
    }

    public function search(Request $request)
    {

        if ($request->has("id")) {
            $barang = Barang::find($request->id);
            $barang->load(['kategori', 'user']);

            return response()->json([
                'status' => 'Success',
                'data'   => $barang
            ]);
        } else if ($request->has('kategori_id')) {
            $data = Barang::where('kategori_id', '=', $request->kategori_id)->get();
            if (count($data) == 0) {
                return response()->json([
                    'Status' => "Empty"
                ]);
            } else {
                return response()->json([
                    'status' => "Success",
                    'data' => $data
                ]);
            }
        } else {

            return $this->get();
        }
    }

    public function create(Request $request)
    {
        $barang = Barang::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Data berhasil ditambahkan',
            'data'    => $barang
        ]);
    }

    public function update(Request $request)
    {
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $harga = $request->harga;
        $gambar = $request->gambar;
        $kategori_id = $request->kategori_id;
        $user_id = $request->user_id;

        $barang = Barang::find($request->id);
        $barang->nama = $nama;
        $barang->deskripsi = $deskripsi;
        $barang->harga = $harga;
        $barang->gambar = $gambar;
        $barang->kategori_id = $kategori_id;
        $barang->user_id = $user_id;
        $barang->save();

        return response()->json([
            'status'  => 'Success',
            'message' => 'Data berhasil diperbarui'
        ]);
    }

    public function delete(Request $request)
    {
        $barang = Barang::find($request->id);
        $barang->delete();

        return response()->json([
            'status'  => 'Success',
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
