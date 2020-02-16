<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;

class PenjualanController extends Controller
{
    public function get(Penjualan $penjualan)
    {
        $penjualan::with(['keranjang'])->orderBy('created_at', 'DESC')->get();

        return response()->json([
            'statur' => 'Success',
            'data'   => $penjualan
        ]);
    }

    public function search(Request $request)
    {

        if ($request->has("id")) {
            $penjualan = Penjualan::find($request->id);
            $penjualan->load(['keranjang']);

            return response()->json([
                'status' => 'Success',
                'data'   => $penjualan
            ]);
        } else {

            return $this->get();
        }
    }

    public function create(Request $request)
    {
        Penjualan::create([
            'tanggal'      => $request->tanggal,
            'keranjang_id' => $request->keranjang_id
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    public function update(Request $request)
    {
        $tanggal = $request->tanggal;
        $keranjang_id = $request->keranjang_id;

        $penjualan = Penjualan::find($request->id);
        $penjualan->tenggal = $tanggal;
        $penjualan->kategori_id = $keranjang_id;
        $penjualan->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil diperbarui'
        ]);
    }

    public function delete(Request $request)
    {
        $penjualan = Penjualan::find($request->id);
        $penjualan->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
