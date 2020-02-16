<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PenjualanController extends Controller
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
                'API_KEY' => 'ara_tamvan'
            ]
        ]);
        $result1 = json_decode($response->getBody()->getContents(), false);

        $response = $this->_client->request('GET', 'kategori', [
            'query' => [
                'API_KEY' => 'ara_tamvan'
            ]
        ]);
        $result2 = json_decode($response->getBody()->getContents(), false);

        $response = $this->_client->request('GET', 'pengguna', [
            'query' => [
                'API_KEY' => 'ara_tamvan'
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
            return view('shopping.home', $data);
        } else {
            abort(404);
        }
    }

    public function getByKategori($nama)
    {
        $response = $this->_client->request('GET', 'kategori', [

            'query' => [
                'nama' => $nama,
                'API_KEY' => 'ara_tamvan'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), false);
        return $result;
    }

    public function getNamaKategori($nama)
    {
        $namaKategori = $this->getByKategori($nama);
        $id = $namaKategori->data[0]->id;

        $response = $this->_client->request('GET', 'barang', [
            'query' => [
                'kategori_id' => $id,
                'API_KEY' => 'ara_tamvan'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), false);
        return $result;
    }

    public function pageKategori($nama)
    {
        $kategori = $this->getNamaKategori($nama);

        // var_dump($kategori->data);
        return view('shopping.collection', ['kategori' => $kategori->data, 'judul' => $nama]);
    }

    public function detail($id)
    {
        $response = $this->_client->request('GET', 'barang', [

            'query' => [
                'id' => $id,
                'API_KEY' => 'ara_tamvan'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), false);
        // var_dump($result->data);

        return view('shopping.detail', ['barang' => $result->data]);
    }
}
