<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keranjang;

class KeranjangController extends Controller
{
    public function get(Keranjang $keranjang)
    {
        $keranjang::with(['barang', 'user'])->orderBy('created_at', 'DESC')->get();

        return response()->json([
            'status' => 'Success',
            'data'   => $keranjang
        ]);
    }

    public function search(Request $request)
    {

        if ($request->has("id")) {
            $keranjang = Keranjang::find($request->id);
            $keranjang->load(['barang', 'user']);

            return response()->json([
                'status' => 'Success',
                'data'   => $keranjang
            ]);
        } else {

            return $this->get();
        }
    }

    public function create(Request $request)
    {
        Keranjang::create([
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'barang_id' => $request->barang_id,
            'user_id' => $request->user_id

        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    public function update(Request $request)
    {
        $jumlah = $request->jumlah;
        $total = $request->total;
        $barang_id = $request->barang_id;
        $user_id = $request->user_id;

        $keranjang = Keranjang::find($request->id);
        $keranjang->jumlah = $jumlah;
        $keranjang->total = $total;
        $keranjang->barang_id = $barang_id;
        $keranjang->user_id = $user_id;
        $keranjang->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil diperbarui'
        ]);
    }

    public function delete(Request $request)
    {
        $keranjang = Keranjang::find($request->id);
        $keranjang->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
