<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use App\Guru;
use App\Materi;
use App\Rombel;
use App\Tugas;
use App\Kirim_tugas;
use App\Komen_materi;

class GuruController extends Controller
{
	public function upload_materi(Request $request)
	{
		// dd($request->all());
		$this->validate($request, [
			'mapel_id' => 'required',
			'catatan' => 'required',
			'file' => 'required|file|mimes:docx,xlsx,pptx,pdf',
		]);

		//menyimpan data file yang diupload ke variable $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

		//isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

	/*	dd(auth()->user()->id);*/

		Materi::create([
			'mapel_id' => $request->mapel_id,
			'rombel_id' => $request->rombel_id,
			'catatan' => $request->catatan,
			'file' => $nama_file,
		]);

		return redirect ()->back();
	}

	public function komen_create(Request $request)
	{
		Komen_materi::create([
			'materi_id' => $request->materi_id,
			'post' => $request->post,
		]);

		return redirect ()->back();
	}	

	public function index_tugas($slug)
	{
        $a = Guru::where('user_id', auth()->user()->id)->first();
        $b = Guru::where('user_id',auth()->user()->id)->get(); 
        $url = url()->full();
        $u = explode('/', $url);
        $rombel = $u[4];

        $m = Rombel::where('slug',$slug)->first();
        
  		$guru = Guru::where('user_id', auth()->user()->id)->first();
  		$mapel = Mapel::where('guru_id', $guru->id)->first();

  		$tugas =  \App\Tugas::with('mapel')->OrderBy('updated_at','DESC')
                                            ->get();

		return view ('guru.tugas.lihat_tugas',compact('b', 'rombel','m','mapel','tugas','guru'));     
	}

	public function upload_tugas(Request $request)
	{
		$this->validate($request, [
			'mapel_id' => 'required',
			'rombel_id' => 'required',
			'judul' => 'required',
			'catatan' => 'required',
			'file' => 'required|file|mimes:docx,xlsx,pptx,pdf',
			'deadline' => 'required',
		]);

		//menyimpan data file yang diupload ke variable $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

		//isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_tugas';
		$file->move($tujuan_upload,$nama_file);

		Tugas::create([
			'mapel_id' => $request->mapel_id,
			'rombel_id' => $request->rombel_id,
			'judul' => $request->judul,
			'catatan' => $request->catatan,
			'file' => $nama_file,
			'deadline' => $request->deadline,
		]);

		return redirect()->back();		
	}

	public function index_nilai()
	{
		return view ('guru.nilai.nilai');
	}

	public function index_anggota()
	{
		return view ('guru.anggota.anggota');
	}

	public function lihat($slug,$id)
	{
		$siswa = Kirim_tugas::where('tugas_id',$id)->get();
		return view ('guru.kasih_nilai.index', compact('siswa','id'));
	}
	
	public function nilai(Request $request)
	{
		Kirim_tugas::where('id',$request->item_id)->update([
        	'nilai' => $request->nilai
        ]);
		
		return redirect()->back();
	}
}
