<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_loaners extends Model
{
    use HasFactory;
    protected $fillable = ['id_loaners', 'id_book', 'id_book_img', 'dateOfloan', 'dateOfreturn', 'descriptions'];

    public function loaner()
    {
        return $this->belongsTo(loan::class, 'id_loaners');
    }

    public function books()
    {
        return $this->belongsTo(book::class, 'id_book');
    }
}
