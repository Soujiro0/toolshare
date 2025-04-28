<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowRequestItemsModel extends Model
{
    protected $table = 'tbl_borrow_request_items';
    protected $primaryKey = 'request_item_id';
    public $timestamps = true;

    protected $fillable = [
        'request_id',
        'unit_id',
        'item_condition_out',
        'item_condition_in',
        'damage_status',
        'damage_notes',
        'returned_date',
    ];

    public function request()
    {
        return $this->belongsTo(BorrowRequestModel::class, 'request_id', 'request_id');
    }

    public function unit()
    {
        return $this->belongsTo(ItemUnitModel::class, 'unit_id', 'unit_id');
    }
}
