<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pasien
        $pasien = Pasien::all();
    	// mengirim data pasien ke view index
    	return view('layout/pasien',['pasien'=>$pasien]);

    }

    public function tambahpasien()
    {
    	// mengambil data dari table pasien


    	// mengirim data pasien ke view index
    	return view('layout/tambahpasien');

    }

    public function insertdata(Request $request)
    {
        Pasien::create($request->all());

    	// mengirim data pasien ke view index
    	return redirect()->route('pasien');


    }

    public function ubahpasien($id)
    {
    	// mengambil data dari table pasien
        $pasien = Pasien::find($id);

    	// mengirim data pasien ke view index
    	return view('layout/ubahpasien',compact('pasien'));

    }

    public function updatedata(Request $request, $id)
    {
    	// mengambil data dari table pasien
        $pasien = Pasien::find($id);
        $pasien->update($request->all());

    	// mengirim data pasien ke view index
    	return redirect()->route('pasien');

    }

    public function deletepasien($id)
    {
    	// mengambil data dari table pasien
        $pasien = Pasien::find($id);
        $pasien->delete();

    	// mengirim data pasien ke view index
    	return redirect()->route('pasien');

    }
}
