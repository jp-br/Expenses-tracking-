<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
     protected $fillable = [
        'category_id',
        'name',
        'amount',
        'description',
        'expense_date',
    ];

     public function category(){
        return $this->hasMany(Category::class);
    }
}
