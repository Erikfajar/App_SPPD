<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class datapegawai extends Model
{
    //Supaya fitur laravel scout bisa di pake
    use HasFactory, Searchable;

    //untuk menampilkan/mengambil data dari db
    protected $table = "datapegawai";
    protected $fillable = [
        'id' ,'nip','nama','pangkat','jabatan','tgllhr'
    ];

    //untuk relasi antar tabel 
    public function datapegawai()
    {
        return $this->hasMany(sppd::class);
    }

    //untuk fitur search laravel scout
    public function toSearchableArray()
{
    return [
        'nip' => $this->nip,
        'nama' => $this->nama,
        'pangkat' => $this->pangkat,
        'jabatan' => $this->jabatan,
    ];
}

}
