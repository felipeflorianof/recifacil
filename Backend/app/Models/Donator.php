<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Donator extends Model
{
    use HasFactory;

    protected $table = '_donator';
    protected $primaryKey = 'uuid';

    protected $fillable = [
        'cpf',
        'date_birth',
        'person_uuid'
    ];

    public $timestamps = false;

    public function person(){ return $this->belongsTo(People::class, 'person_uuid', 'uuid'); }
    public function contact(){ return $this->belongsTo(Contact::class, 'contact_uuid', 'uuid'); }
    public function address(){ return $this->belongsTo(Address::class, 'address_uuid', 'uuid'); }
}
