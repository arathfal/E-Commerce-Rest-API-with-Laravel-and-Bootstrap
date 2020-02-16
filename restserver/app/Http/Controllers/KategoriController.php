<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function get()
    {
        $kategori = Kategori::all();

        return response()->json([
            'status' => 'Success',
            'data'   => $kategori
        ]);
    }

    public function search(Request $request)
    {

        if ($request->has("id")) {
            $kategori = Kategori::find($request->id);

            return response()->json([
                'status' => 'Success',
                'data'   => $kategori
            ]);
        } else if ($request->has('nama')) {
            $data = Kategori::where('nama', '=', $request->nama)->get();
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
        Kategori::create([
            'nama' => $request->nama
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    public function update(Request $request)
    {
        $nama = $request->nama;

        $kategori = Kategori::find($request->id);
        $kategori->nama = $nama;
        $kategori->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil diperbarui'
        ]);
    }

    public function delete(Request $request)
    {
        $kategori = Kategori::find($request->id);
        $kategori->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil dihapuskan'
        ]);
    }
}
