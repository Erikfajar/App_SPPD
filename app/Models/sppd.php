<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sppd extends Model
{
    use HasFactory;
    public $table = "sppd";
    protected $fillable = [
        'pengguna_anggaran',
        'datapegawai_id',
        'biaya_perjalanan',
        'maksud_perjalanan',
        'alat_angkutan',
        'tempat_berangkat',
        'tempat_tujuan',
        'lama_berangkat',
        'tgl_berangkat',
        'tgl_kembali',
        'namapengikut1',
        'tgllhr1',
        'ketpengikut1',
        'namapengikut2',
        'tgllhr2',
        'ketpengikut2',
        'instansi',
        'akun',
        'ket',
    ];
    public function datapegawai()
    {
        return $this->belongsTo(datapegawai::class);
    }
    
    protected $appends = ['tgl_berangkat_indo', 'tgl_kembali_indo','tgl_dibuat','tgl_lhr1_indo','tgl_lhr2_indo'];

    public function getTglBerangkatIndoAttribute()
    {
        return Carbon::parse($this->attributes['tgl_berangkat'])->translatedFormat('d F Y');
    }

    public function getTglKembaliIndoAttribute()
    {
        return Carbon::parse($this->attributes['tgl_kembali'])->translatedFormat('d F Y');
    }
    public function getTglDibuatAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }

    public function getTglLhr1IndoAttribute()
    {
        if($this->attributes['tgllhr1'])
        {
            return Carbon::parse($this->attributes['tgllhr1'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
    }
    public function getTglLhr2IndoAttribute()
    {
        if($this->attributes['tgllhr2'])
        {
            return Carbon::parse($this->attributes['tgllhr2'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
}
}
