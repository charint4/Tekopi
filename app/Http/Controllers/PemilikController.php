<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Charts\LaporanTahunan;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

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
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
        return view('pemilik/welcome');
    }
    
    public function profile()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
            // $user = User::where('id',Auth::id())->get();
            $user = Auth::User();
            return view('pemilik/profile', compact('user'));
    }
    
    public function updatePemilik(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');

        User::where('id', Auth::user()->id)->update([
            'name' => $req->name,
            'no_hp' => $req->no_hp
        ]);

        return redirect()->route('profile');
        
    }
    
    public function lk()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
        return view('pemilik/report');
    }
    
    public function lkBulan()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
        return view('pemilik/monthReport');
    }
    
    public function listKaryawan()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
        $karyawanList = DB::table('karyawan')
                    ->select('karyawan.*')
                    ->get();

        return view('pemilik/listKaryawan', compact('karyawanList'));
    }

    public function registerKaryawan(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
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
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            

        Karyawan::where('id_kar', $req->id_kar)->delete();
        User::where('email', $req->email_kar)->delete();

        return redirect()->route('listKaryawan');
    }

    public function updateKaryawan(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            

        User::where('email', $req->email_kar2)->update([
            'name' => $req->nama_kar,
            'no_hp' => $req->no_hp_kar
        ]);

        Karyawan::where('id_kar', $req->id_kar)->update([
            'nama_kar' => $req->nama_kar,
            'no_hp_kar' => $req->no_hp_kar
        ]);

        return redirect()->route('listKaryawan');
    }


    public function chartTahunan(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
        $total = 0;
        $years = $req->years;
        $groups = DB::table('transaksi')
                ->select(
                    DB::raw('sum(harga_tran) as sums'), 
                    DB::raw("DATE_FORMAT(tanggal_tran,'%M %Y') as months")
                 )
                 ->where(DB::raw("year(tanggal_tran)"),$req->years)
                ->groupBy('months')
                ->orderBy('tanggal_tran')
                ->pluck('sums', 'months')->all();

        $groups2 = DB::table('transaksi')
                ->select(
                    DB::raw('sum(harga_tran) as sums'), 
                    DB::raw("DATE_FORMAT(tanggal_tran,'%M %Y') as months")
                 )
                ->where(DB::raw("year(tanggal_tran)"),$req->years)
                ->groupBy('months')
                ->get();
     
        for ($i=0; $i<=count($groups); $i++) {
                    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                }
        $chart = new LaporanTahunan;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
        return view('pemilik/report', [ 'chartTahunan' => $chart ], compact('years','groups2','total'));
    }

    public function chartBulanan(Request $req)
    {   
        if (Auth::user()->login_type == 1)
            return view('welcome');
        if (Auth::user()->login_type == 2)
            return view('karyawan/welcome');
            
        $months = 'Januari';
        $years = $req->years;
        if($req->months == '01'){
            $months = 'Januari';
        }
        if($req->months == '02'){
            $months = 'Februari';
        }
        if($req->months == '03'){
            $months = 'Maret';
        }
        if($req->months == '04'){
            $months = 'April';
        }
        if($req->months == '05'){
            $months = 'Mei';
        }
        if($req->months == '06'){
            $months = 'Juni';
        }
        if($req->months == '07'){
            $months = 'Juli';
        }
        if($req->months == '08'){
            $months = 'Agustus';
        }
        if($req->months == '09'){
            $months = 'September';
        }
        if($req->months == '10'){
            $months = 'Oktober';
        }
        if($req->months == '11'){
            $months = 'November';
        }
        if($req->months == '12'){
            $months = 'Desember';
        }
        $groups = DB::table('transaksi')
                ->select(
                    DB::raw("DATE_FORMAT(tanggal_tran,'%D %M %Y') as days"),
                    DB::raw('sum(harga_tran) as sums')
                    
                 )
                ->where(DB::raw("month(tanggal_tran)"),$req->months)
                ->where(DB::raw("year(tanggal_tran)"),$req->years)
                ->groupBy('days')
                ->orderBy('tanggal_tran')
                ->pluck('sums','days')->all();

       // $groups = $groups->sortBy('days');        

        $groups2 = DB::table('transaksi')
                ->select(
                    DB::raw('sum(harga_tran) as sums'), 
                    DB::raw("DATE_FORMAT(tanggal_tran,'%D %M %Y') as days")
                 )
                ->where(DB::raw("month(tanggal_tran)"),$req->months)
                ->where(DB::raw("year(tanggal_tran)"),$req->years)
                ->groupBy('days')
                ->get();

       
        for ($i=0; $i<=count($groups); $i++) {
                    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                }
       
        
        $chart = new LaporanTahunan;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
        return view('pemilik/monthReport',compact('months', 'years','groups2','chart'));
    }
}
