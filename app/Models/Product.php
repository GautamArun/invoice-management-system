<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'price',
        'description',
    ];

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
