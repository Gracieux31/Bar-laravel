<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitTable extends Model
{
    use HasFactory;
    protected $table= 'fruit_table';
    protected $fillable = [
        'name', 
        'fruit_image',
    ];
}
