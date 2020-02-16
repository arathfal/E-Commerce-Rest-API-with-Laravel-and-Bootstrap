<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use Illuminate\Support\Facades\Crypt;

class PenggunaController extends Controller
{
    public function get()
    {
        $pengguna = Pengguna::all();

        return response()->json([
            'status' => 'Success',
            'data'   => $pengguna
        ]);
    }

    public function search(Request $request)
    {

        if ($request->has("id")) {
            $pengguna = Pengguna::find($request->id);

            return response()->json([
                'status' => 'Success',
                'data'   => $pengguna
            ]);
        } else if ($request->has('email')) {
            $pengguna = Pengguna::where('email', '=', $request->email)->get();

            return response()->json([
                'status' => 'Success',
                'data'   => $pengguna
            ]);
        } else {

            return $this->get();
        }
    }

    public function create(Request $request)
    {
        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => encrypt($request->password),
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    public function update(Request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $password = Crypt::encryptString($request->password);
        $alamat = $request->alamat;
        $telepon = $request->telepon;

        $pengguna = Pengguna::find($request->id);
        $pengguna->nama = $nama;
        $pengguna->email = $email;
        $pengguna->password = $password;
        $pengguna->alamat = $alamat;
        $pengguna->telepon = $telepon;
        $pengguna->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil diperbarui'
        ]);
    }

    public function delete(Request $request)
    {
        $pengguna = Pengguna::find($request->id);
        $pengguna->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
