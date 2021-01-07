<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Charts\LaporanTahunan;

class PemilikController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pemilik/welcome');
    }
    
    public function profile()
    {
        return view('pemilik/profile');
    }
    
    public function lk()
    {
        return view('pemilik/report');
    }
    
    public function lkBulan()
    {
        return view('pemilik/monthReport');
    }
    
    public function listKaryawan()
    {
        $karyawanList = DB::table('karyawan')
                    ->select('karyawan.*')
                    ->get();

        return view('pemilik/listKaryawan', compact('karyawanList'));
    }

    public function registerKaryawan(Request $req)
    {
        User::create(
            [
                'name' => $req->nama_kar,
                'email' => $req->email_kar,
                'no_hp' => $req->no_hp_kar,
                'alamat' => $req->alamat,
                'login_type' => $req->login_type,
                'password' => Hash::make($req->password),
            ]
        );

        Karyawan::create(
            [
                'nama_kar' => $req->nama_kar,
                'email_kar' => $req->email_kar,
                'no_hp_kar' => $req->no_hp_kar,
            ]
        );

        return redirect()->route('listKaryawan');
    }

    public function hapusKaryawan(Request $req)
    {

        Karyawan::where('id_kar', $req->id_kar)->delete();
        User::where('email', $req->email_kar)->delete();

        return redirect()->route('listKaryawan');
    }

    public function updateKaryawan(Request $req)
    {

        User::where('email', $req->email_kar)->update([
            'name' => $req->nama_kar,
            'no_hp' => $req->no_hp_kar
        ]);

        Karyawan::where('id_kar', $req->id_kar)->update([
            'nama_kar' => $req->nama_kar,
            'no_hp_kar' => $req->no_hp_kar
        ]);

        return redirect()->route('listKaryawan');
    }


    public function chartTahunan()
    {
        $groups = DB::table('transaksi')
                ->select(
                    DB::raw('sum(harga_tran) as sums'), 
                    DB::raw("DATE_FORMAT(tanggal_tran,'%M %Y') as months")
                 )
                ->groupBy('months')
                ->pluck('sums', 'months')->all();

        //$groups = DB::table('transaksi')
        //          ->select('idUser as months', DB::raw('count(*) as total'))
        //          ->groupBy('months')
        //         ->pluck('total', 'months')->all();
        // Generate random colours for the groups
        for ($i=0; $i<=count($groups); $i++) {
                    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                }
        // Prepare the data for returning with the view
        $chart = new LaporanTahunan;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
        return view('pemilik/report', [ 'chartTahunan' => $chart ]);
    }
    //DB::raw('month(tanggal_tran) as months')
}
