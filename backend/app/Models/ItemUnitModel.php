<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemUnitModel extends Model
{
    protected $table = 'tbl_item_units';
    protected $primaryKey = 'unit_id';

    protected $fillable = [
        'item_id',
        'property_no',
        'brand',
        'model',
        'specification',
        'item_condition',
        'availability_status',
        'operational_status',
        'date_acquired'
    ];

    public function item()
    {
        return $this->belongsTo(ItemModel::class, 'item_id', 'item_id');
    }
}
