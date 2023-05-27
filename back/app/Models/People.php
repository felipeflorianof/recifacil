<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = '_people';
    protected $primaryKey = 'uuid';

    protected $fillable = [
        'name'
    ];

    public function donator(){ return $this->hasOne(Donator::class, 'person_uuid', 'uuid'); }
    public function collectionPoint(){ return $this->hasOne(CollectionPoint::class, 'person_uuid', 'uuid'); }
}
