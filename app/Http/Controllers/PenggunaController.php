<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {

        return view('landing');
    }

    public function store(Request $request)
    {

        $data = explode(' ', $request->input('data'));

        // $CITY = strtoupper(end($data));

        // Fungsi untuk menyaring data tipe integer
        $filteredData = array_filter($data, 'is_numeric');

        // Ambil nilai pertama dari array hasil penyaringan
        $AGE = reset($filteredData);

        $index = array_search($AGE, $data);

        if ($index !== false) {
            $nama = array_slice($data, 0, $index);
            $NAME = strtoupper(implode(' ', $nama));

            $kota = array_slice($data, $index + 1);
            $CITY = strtoupper(implode(' ', $kota));
        }

        Pengguna::create([
            'NAME' => $NAME,
            'AGE' => $AGE,
            'CITY' => $CITY,
        ]);

        return view('landing');
    }
}
