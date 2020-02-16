<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    private $_client;

    public function __construct()
    {

        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/api/',
        ]);
    }


    // Controller Halaman

    public function PageRegister()
    {

        $message = "";

        return view('pengurus.register', ['message' => $message]);
    }

    public function PageLogin(Request $request)
    {

        if ($request->session()->has('nama')) {

            return redirect('/pengurus/dashboard');
        } else {

            $message = "";

            return view('pengurus.login', ['message' => $message]);
        }
    }

    public function getEmail($email)
    {

        $response = $this->_client->request('GET', 'pengguna', [

            'query'    =>    [

                'API_KEY'    =>    'ara_tamvan',
                'email'    =>    $email

            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), false);

        return $result;
    }

    public function PageDashboard(Request $request)
    {

        if ($request->session()->has('nama')) {


            return view('pengurus.dashboard', ['user' => $request->session()->get('nama')]);
        } else {


            return redirect('/pengurus');
        }
    }


    // Register, login dan Logout

    public function DaftarBaru(Request $request)
    {

        $email = $this->getEmail($request->email);

        if ($email->status == "Success") {

            $message = "Email telah terpakai";

            return view('pengurus.register', ['message' => $message]);
        } else {

            $response = $this->_client->request('POST', 'pengguna', [

                'form_params'      =>    [

                    'nama'         =>    $request->nama,
                    'email'        =>    $request->email,
                    'password'     =>    $request->password,
                    'alamat'       =>    $request->alamat,
                    'telepon'      =>    $request->telepon,
                ],

                'query'    =>    [

                    'API_KEY'      =>    'ara_tamvan'

                ]

            ]);

            $result = json_decode($response->getBody()->getContents(), false);

            if ($result->status == "Success") {

                return redirect('/pengurus');
            } else {

                $message = "Email telah terpakai";

                return view('pengurus.register', ['message' => $message]);
            }
        }
    }



    public function LoginAdmin(Request $request)
    {

        $data_user = $this->getEmail($request->email);
        // var_dump(decrypt($data_user->data[0]->password));

        if ($data_user->status == "Success") {

            $password = ($request->password);
            if ($password == decrypt($data_user->data[0]->password)) {

                $request->session()->put('nama', $data_user->data[0]->nama);

                return redirect('/pengurus/dashboard');
            } else {

                $message = "Password Salah";

                return view('pengurus.login', ['message' => $message]);
            }
        } else {

            $message = "Email tidak ditemukan";

            return view('pengurus.login', ['message' => $message]);
        }
    }


    public function LogoutAdmin(Request $request)
    {

        $request->session()->forget('nama');

        return redirect('/pengurus');
    }
}
