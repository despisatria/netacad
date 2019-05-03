<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\File as File;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;


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
        if (Auth::user()->level == 0) {
            // siswa
            return view('dashboard');
        } else {
            // guru
            return view('admin-dashboard');
        }
    }

    public function networking() {
        return view("networking");
    }

    public function ipaddress() {
        return view("ipaddress");
    }

    public function routing() {
        return view("routing");
    }

    public function evaluasi() {
        return view("evaluasi");
    }

    public function upload(Request $request) {
        $this->validate($request, [
            'name' => 'nullable|max:100',
            'file' => 'required|file|max:2000'
        ]);

        $uploadedFile = $request->file('file');   
        // dd($uploadedFile->getClientOriginalName());
        $path = $uploadedFile->store('public/files');
        
        $file = FileUpload::create([
            'nama' => $uploadedFile->getClientOriginalName(),
            'lokasi' => $path,
            'user_id' => Auth::user()->id
        ]);

        return 'adaw';
    }
}
