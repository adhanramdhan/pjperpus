<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_loan extends Model
{
    use HasFactory;
    protected $fillable = ['id_loaner', 'id_book', 'dateOfloan', 'dateOfreturn', 'description'];
}
