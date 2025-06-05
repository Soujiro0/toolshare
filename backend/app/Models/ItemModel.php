<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    protected $table = 'tbl_items';
    protected $primaryKey = 'item_id';

    protected $fillable = [
        'name',
        'category_id',
        'unit_of_measure',
        'image_path',
        'borrowed_count',
    ];

    public function category()
    {
        return $this->belongsTo(ItemCategoryModel::class, 'category_id', 'category_id');
    }

    public function units()
    {
        return $this->hasMany(ItemUnitModel::class, 'item_id', 'item_id');
    }
}
