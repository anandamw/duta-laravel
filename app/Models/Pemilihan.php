<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemilihan extends Model
{
    use HasFactory;


    protected $table = 'pemilihans';
    protected $guarded = ['id'];

    public static function joinKandidat()
    {
        $query = DB::table('pemilihans')->join('kandidats', 'pemilihans.kandidats_id', '=', 'kandidats.id');
        return $query;
    }
}
