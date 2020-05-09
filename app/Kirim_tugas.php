<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kirim_tugas extends Model
{
    protected $table = "kirim_tugas";
    protected $fillable = ['tugas_id','siswa_id','file','catatan','nilai'];

    public function tugas(){
    	return $this->belongsTo('App\Tugas','tugas_id','id');
    }

    public function siswa(){
    	return $this->belongsTo(Siswa::class);
    }
}
