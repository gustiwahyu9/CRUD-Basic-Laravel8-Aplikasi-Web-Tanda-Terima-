<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';
    protected $dates = ['tanggal_penyerahan' => 'datetime:Y-m-d'];
    protected $fillable = ['id', 'nama_lengkap', 'tanggal_penyerahan', 'jenis_kelamin', 'satker', 'petugas', 'lpj_bulan', 'tahun', 'image'];

    public function getImage()
    {
        if (!$this->image) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->image);
    }
}
