<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
     protected $fillable = [
        'category_id',
        'amount',
        'description',
        'expense_date',
    ];
}
