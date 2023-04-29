<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collectionpoint extends Model
{
 protected $fillable = [
        'name', 'address', 'phone', 'CNPJ', 'Email', 'DateFoundation', 'CEP', 'City', 'State', 'Neighborhood', 'street', 'Number', 'Complement'
    ];

    protected $casts = [
        'DateFoundation' => 'date',
    ];

    public function recyclableMaterials()
    {
        return $this->belongsToMany(RecyclableMaterial::class, 'collection_point_recyclable_material', 'collection_point_id', 'recyclable_material_id');
    }
}
