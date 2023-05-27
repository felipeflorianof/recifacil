<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = '_address';
    protected $primaryKey = 'uuid';

    protected $fillable = [
        'number',
        'street',
        'neighborhood',
        'city',
        'state',
        'country',
        'zip',
        'complement'
    ];
}
