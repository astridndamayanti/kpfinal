<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use App\Guru;
use App\Rombel;
use App\Materi;
use App\Kirim_tugas;
use App\Komen_materi;
use auth;

class SiswaController extends Controller
{
    public function index_tugas($slug)
    {
        $a = Guru::where('user_id', auth()->user()->id)->first();
        $b = Guru::where('user_id',auth()->user()->id)->get(); 
        $url = url()->full();
        $u = explode('/', $url);
        $mapel = $u[4];

        $m = Mapel::where('slug',$slug)->first();

        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $tugas = \App\Tugas::with('mapel')->where('mapel_id',$m->id)->OrderBy('updated_at','DESC')
                                            ->get();
		return view ('siswa.indonesia.index',compact('b', 'mapel','m','tugas'));  
    }

	public function komen_create(Request $request)
	{
		Komen_materi::create([
			'materi_id' => $request->materi_id,
			'post' => $request->post,
		]);

		return redirect ()->back();
	}

    public function upload_tugas_siswa(Request $request)
    {
        //menyimpan data file yang diupload ke variable $file
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        //isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_tugas_siswa';
        $file->move($tujuan_upload,$nama_file);

        Kirim_tugas::create([
            'tugas_id' => $request->item_id,
            'siswa_id' => auth()->user()->siswa->id,
            'file' => $nama_file,
            'catatan' => $request->catatan,
        ]);
        return redirect()->back();      
    }
}
