<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer_name',
        'computer_date',
        'computer_max_capacity',
        'computer_brand',
        'computer_description',
        'computer_color',
        'computer_is_active',
        'computer_price',
        'computer_size',
    ];
}
