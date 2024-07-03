<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;
    protected $fillable = ['id_member' , 'no_trx'];

    public function loanname()
    {
        return $this->belongsTo(member::class , 'id_member');
    }
}
