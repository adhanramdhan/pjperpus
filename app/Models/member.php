<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class member extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['member_name', 'email' , 'no_tlp'];


    public function transaksi()
    {
        // return $this->hasMany(Transaksi::class);
    }
}
