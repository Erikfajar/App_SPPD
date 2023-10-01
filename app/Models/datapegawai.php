<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class datapegawai extends Model
{
    use HasFactory, Searchable;
    protected $table = "datapegawai";
    protected $fillable = [
        'id' ,'nip','nama','pangkat','jabatan','tgllhr'
    ];

    public function datapegawai()
    {
        return $this->hasMany(sppd::class);
    }
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
