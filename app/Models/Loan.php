<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['borrower_name', 'loan_date', 'book_id', 'due_date'];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
