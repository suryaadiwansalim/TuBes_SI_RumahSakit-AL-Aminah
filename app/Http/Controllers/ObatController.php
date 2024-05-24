<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use App\Models\Pasien;
use Illuminate\Http\Request;
use PDF;

class ObatController extends Controller
{
    public function index()
    {
    	// mengambil data obat dari tabel obat
        $obat = Obat::with('Pasien')->get();
    	// mengirim data obat ke view obat
    	return view('layout/obat',compact('obat'));


    }

    public function tambahobat()
    {
    	// mengambil data pasien dari tabel pasien
        $pasien=Pasien::all();
    	// mengirim data pasien ke view tambahobat
    	return view('layout/tambahobat',compact('pasien'));

    }

    public function insertdata1(Request $request)
    {
        // menerima data dari form tambah obat
    	Obat::create($request->all());

    	// mengalihkan halaman ke halaman obat
    	return redirect()->route('obat');
    }

    public function ubahobat($id_obat)
    {
    	// mengambil data obat berdasarkan id_obat
        $obat = Obat::find($id_obat);
        $pasien=Pasien::all();

    	// mengirimkam data obat ke view ubahobat
    	return view('layout/ubahobat',compact('obat','pasien'));

    }

    public function updatedata1(Request $request, $id_obat)
    {
    	// menerima data obat yang telah diubah dari form ubah obat berdasarkan id_obat
        $obat = Obat::find($id_obat);
        $obat->update($request->all());

    	// mengalihkan halaman ke halaman obat
    	return redirect()->route('obat');

    }

    public function deleteobat($id_obat)
    {
    	// menghapus data obat berdasarkan id_obat
        $obat = Obat::find($id_obat);
        $obat->delete();

    	return redirect()->route('obat');

    }

    public function eksporobat()
    {
    	// mengambil data obat dari tabel obat
        $obat = Obat::with('Pasien')->get();
        // mengirim data obat ke view obat-pdf
        view()->share('obat',$obat);
        $pdf = PDF::loadview('layout/dataobat-pdf');
        return $pdf->download('obat.pdf');

    }
}
