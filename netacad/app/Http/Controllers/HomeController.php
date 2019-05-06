<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\File as File;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Soal;

class HomeController extends Controller
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
        if (Auth::user()->level == 1 || Auth::user()->level == NULL) {
            // siswa
            return view('dashboard');
        } else {
            // guru
            return view('admin-dashboard');
        }
    }

    public function networking() {
        $files = FileUpload::where("user_id", Auth::user()->id)
                ->where("materi", "=", "basic-networking")->first();
                // dd(Storage::url($files->lokasi));
        return view("networking", ['files' => $files]);
    }

    public function ipaddress() {
        $files = FileUpload::where("user_id", Auth::user()->id)
                ->where("materi", "=", "ipaddress")->first();
        // dd($files);
        // if($files == NULL) {
        //     $files->lolasi = '&nbsp';
        //     $files->nama = '&nbsp';
        // }
        return view("ipaddress", ['files' => $files]);
    }

    public function routing() {
        $files = FileUpload::where("user_id", Auth::user()->id)
                ->where("materi", "=", "routing")->first();
        return view("routing", ['files' => $files]);
    }

    public function evaluasi() {
        return view("evaluasi");
    }

    public function evaluasiIpaddress() {
        $files = FileUpload::where("user_id", Auth::user()->id)
                ->where("materi", "=", "ipaddress")->first();
        
        if ($files == NULL) {
            return view("belumBisaEvaluasi");
        } else {
            $datas = Soal::all();
            $i = 1;
            foreach ($datas as $data) {
                $soal[$i] = $data->soal;
                $pilihanA[$i] = $data->opsiA;
                $pilihanB[$i] = $data->opsiB;
                $pilihanC[$i] = $data->opsiC;
                $pilihanD[$i] = $data->opsiD;
                $pilihanE[$i] = $data->opsiE;
                $kunciJawabanA[$i] = $data->a;
                $kunciJawabanB[$i] = $data->b;
                $kunciJawabanC[$i] = $data->c;
                $kunciJawabanD[$i] = $data->d;
                $kunciJawabanE[$i] = $data->e;
                $i++;
            }
            // dd($soal, $pilihanA, $kunciJawabanA);
            return view("evaluasiIpaddress", [
                'soal' => $soal,
                'pilihanA' => $pilihanA,
                'pilihanB' => $pilihanB,
                'pilihanC' => $pilihanC,
                'pilihanD' => $pilihanD,
                'pilihanE' => $pilihanE,
                'kunciJawabanA' => $kunciJawabanA,
                'kunciJawabanB' => $kunciJawabanB,
                'kunciJawabanC' => $kunciJawabanC,
                'kunciJawabanD' => $kunciJawabanD,
                'kunciJawabanE' => $kunciJawabanE,
                ]);
        }
    }

    public function evaluasiIpaddressPost(Request $request) {
        $nilai = 0;
        for ($i=1; $i <= 20; $i++) { 
            $no = "soal".$i;
            // $jawaban[$i] = $request->{$no};
            if ($request->{$no} == 1){
                $nilai++;
            }
        }
        dd($request, $nilai);
    }

    public function upload(Request $request) {
        $this->validate($request, [
            'name' => 'nullable|max:100',
            'file' => 'required|file|max:10000'
        ]);

        $uploadedFile = $request->file('file');   
        // dd($uploadedFile->getClientOriginalName());
        $path = $uploadedFile->store('public/files');
        
        $file = FileUpload::create([
            'nama' => $uploadedFile->getClientOriginalName(),
            'lokasi' => $path,
            'materi' => $request->materi,
            'user_id' => Auth::user()->id
        ]);

        return Redirect::to('/home');;
    }
}
