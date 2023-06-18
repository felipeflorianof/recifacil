<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionPoint extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cnpj',
        'date_birth'
    ];

    public function user(){ return $this->belongsTo(User::class, 'user_uuid', 'uuid'); }
    public function contact(){ return $this->belongsTo(Contact::class, 'contact_uuid', 'uuid'); }
    public function address(){ return $this->belongsTo(Address::class, 'address_uuid', 'uuid'); }
}