<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yard extends Model
{
    use HasFactory;
    protected $table = 'yards';
    protected $primaryKey = 'id';
    protected $fillable =[
        'name',
        'price',
        'img',
        'view',
        'total_booking',
        'address',
        'description',
    ];
}
