<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListFruitTable extends Model
{
    use HasFactory;
    protected $table= 'list_fruit_tables';
    protected $fillable = [
        'name',
        'type',
        'fruit_image',
    ];
}
