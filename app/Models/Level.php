<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    // const AllLevel = 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9 || 10;
    // const enth = 1 || 2;

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama_level', 'keterangan'];


    
}
