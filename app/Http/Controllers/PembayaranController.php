<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Pasien;
use Illuminate\Http\Request;
use PDF;

class PembayaranController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pembayaran
        $pembayaran = Pembayaran::with('Pasien')->get();
    	// mengirim data pembayaran ke view index
    	return view('layout/pembayaran',compact('pembayaran'));

    }

    public function tambahpembayaran()
    {
    	// mengambil data dari table pembayaran

        $pasien=Pasien::all();
    	// mengirim data pembayaran ke view index
    	return view('layout/tambahpembayaran',compact('pasien'));

    }

    public function insertdata3(Request $request)
    {



        // mengambil data dari table pembayaran
    	Pembayaran::create($request->all());

    	// mengirim data pembayaran ke view index
    	return redirect()->route('pembayaran');

    }

    public function ubahpembayaran($id_pembayaran)
    {
    	// mengambil data dari table pembayaran
        $pembayaran = Pembayaran::find($id_pembayaran);
        $pasien=Pasien::all();

    	// mengirim data pembayaran ke view index
    	return view('layout/ubahpembayaran',compact('pembayaran','pasien'));

    }

    public function updatedata3(Request $request, $id_pembayaran)
    {
    	// mengambil data dari table pembayaran
        $pembayaran = Pembayaran::find($id_pembayaran);
        $pembayaran->update($request->all());

    	// mengirim data pembayaran ke view index
    	return redirect()->route('pembayaran');

    }

    public function deletepembayaran($id_pembayaran)
    {
    	// mengambil data dari table pembayaran
        $pembayaran = Pembayaran::find($id_pembayaran);
        $pembayaran->delete();

    	// mengirim data pembayaran ke view index
    	return redirect()->route('pembayaran');

    }

    public function eksporpembayaran()
    {
    	// mengambil data dari table pembayaran
        $pembayaran = Pembayaran::with('Pasien')->get();
        view()->share('pembayaran',$pembayaran);
        $pdf = PDF::loadview('layout/datapembayaran-pdf');
        return $pdf->download('pembayaran.pdf');

    }
}
