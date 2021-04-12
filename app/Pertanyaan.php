<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan_new';
    // protected $primaryKey = 'id';
    // protected $keyType = "string";

    protected $fillable=[
        'id', 'judul', 'isi', 'vote', 'jawaban_terbaik'
    ];
}
