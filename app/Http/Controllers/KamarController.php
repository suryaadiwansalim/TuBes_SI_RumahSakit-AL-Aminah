<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use App\Models\Pasien;
use Illuminate\Http\Request;
use PDF;

class KamarController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kamar
        $kamar = Kamar::with('Pasien')->get();
    	// mengirim data kamar ke view index
    	return view('layout/kamar',compact('kamar'));

    }

    public function tambahkamar()
    {
    	// mengambil data dari table kamar

        $pasien=Pasien::all();
    	// mengirim data kamar ke view index
    	return view('layout/tambahkamar',compact('pasien'));

    }

    public function insertdata2(Request $request)
    {



        // mengambil data dari table kamar
    	Kamar::create($request->all());

    	// mengirim data kamar ke view index
    	return redirect()->route('kamar');

    }

    public function ubahkamar($id_kamar)
    {
    	// mengambil data dari table kamar
        $kamar = Kamar::find($id_kamar);
        $pasien=Pasien::all();

    	// mengirim data kamar ke view index
    	return view('layout/ubahkamar',compact('kamar','pasien'));

    }

    public function updatedata2(Request $request, $id_kamar)
    {
    	// mengambil data dari table kamar
        $kamar = Kamar::find($id_kamar);
        $kamar->update($request->all());

    	// mengirim data kamar ke view index
    	return redirect()->route('kamar');

    }

    public function deletekamar($id_kamar)
    {
    	// mengambil data dari table kamar
        $kamar = Kamar::find($id_kamar);
        $kamar->delete();

    	// mengirim data kamar ke view index
    	return redirect()->route('kamar');

    }

    public function eksporkamar()
    {
    	// mengambil data dari table kamar
        $kamar = Kamar::with('Pasien')->get();
        view()->share('kamar',$kamar);
        $pdf = PDF::loadview('layout/datakamar-pdf');
        return $pdf->download('kamar.pdf');

    }
}
