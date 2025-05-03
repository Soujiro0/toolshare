<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowRequestSummaryModel extends Model
{
    protected $table = 'tbl_borrow_request_summary';
    protected $primaryKey = 'request_summary_id';
    public $timestamps = true;

    protected $fillable = [
        'request_id',
        'item_id',
        'quantity',
    ];

    public function request()
    {
        return $this->belongsTo(BorrowRequestModel::class, 'request_id', 'request_id');
    }

    public function item()
    {
        return $this->belongsTo(ItemModel::class, 'item_id', 'item_id');
    }
}
