<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_point_id',
        'client_id',
        'date',
        'time_slot',
        'materials',
        'status',
    ];

    protected $casts = [
        'materials' => 'array',
    ];

    public function collectionPoint()
    {
        return $this->belongsTo(CollectionPoint::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
