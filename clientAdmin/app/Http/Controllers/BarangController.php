<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use View;

class BarangController extends Controller
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/',
        ]);
    }

    public function getAll()
    {
        $response = $this->_client->request('GET', 'barang', [
            'query' => [
                'API_KEY' => 'joss'
            ]
        ]);
        $result1 = json_decode($response->getBody()->getContents(), false);

        $response = $this->_client->request('GET', 'kategori', [
            'query' => [
                'API_KEY' => 'joss'
            ]
        ]);
        $result2 = json_decode($response->getBody()->getContents(), false);

        $response = $this->_client->request('GET', 'pengguna', [
            'query' => [
                'API_KEY' => 'joss'
            ]
        ]);
        $result3 = json_decode($response->getBody()->getContents(), false);

        if ($result1->status == "Success") {
            $data =  [
                'barangs' => $result1->data,
                'kategori' => $result2->data,
                'user' => $result3->data,

            ];
            // return $data;
            return View::make('pengurus.table_barang', $data);
        } else {
            abort(404);
        }
    }

    public function store(Request $request)
    {
        // return $request;
        $tujuan_upload = 'gambar';
        $file = $request->file('gambar');
        $file->move($tujuan_upload, $file->getClientOriginalName());
        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $file->getClientOriginalName(),
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id
        ];

        $response = $this->_client->request('POST', 'barang', [
            'form_params' => $data,
            'query' => [
                'API_KEY' => 'joss'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), false);

        // return $result;
        if ($result->status == "Success") {
            // $data =  [
            //     'barangs' => $result->data
            // ];
            // return $data;
            return redirect('/pengurus/table-barang');
        } else {
            abort(404);
        }
    }

    public function update(Request $request)
    {
        // return $request;
        $tujuan_upload = 'gambar';
        $file = $request->file('gambar');
        $file->move($tujuan_upload, $file->getClientOriginalName());
        $data = [
            'id' => $request->id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $file->getClientOriginalName(),
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id
        ];

        $response = $this->_client->request('PUT', 'barang', [
            'form_params' => $data,

            'query' => [
                'API_KEY' => 'ara_tamvan'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), false);

        // return $result;
        if ($result->status == "Success") {
            // $data =  [
            //     'barangs' => $result->data
            // ];
            // return $data;
            return redirect('/pengurus/table-barang');
        } else {
            abort(404);
        }
    }

    public function destroy(Request $request)
    {

        $id = $request->idbr;


        $response = $this->_client->request('DELETE', 'barang', [

            'query' => [
                'id'      => $id,
                'API_KEY' => 'ara_tamvan'

            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), false);

        if ($result->status == "Success") {
            // $data =  [
            //     'barangs' => $result->data
            // ];
            // return $data;
            return redirect('/pengurus/table-barang');
        } else {
            abort(404);
        }
    }
}
