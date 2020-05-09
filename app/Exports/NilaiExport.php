<?php

namespace App\Exports;

use App\Kirim_tugas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NilaiExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    protected $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function view(): View
    {
        $judul = Kirim_tugas::where('tugas_id',$this->id)->first();
        $siswa = Kirim_tugas::where('tugas_id',$this->id)->get();
        return view('guru.nilai.export', compact('judul','siswa'));
    }
}
