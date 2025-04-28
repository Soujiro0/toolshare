<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCategoryModel extends Model
{
    protected $table = 'tbl_item_category';
    protected $primaryKey = 'category_id';
    public $timestamps = true;
    protected $keyType = 'int';

    protected $fillable = ['category_name'];

    public function items()
    {
        return $this->hasMany(ItemModel::class, 'category_id', 'category_id');
    }
}
