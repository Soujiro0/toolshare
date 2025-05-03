<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowRequestModel extends Model
{
    protected $table = 'tbl_borrow_requests';
    protected $primaryKey = 'request_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'status',
        'purpose',
        'remarks',
        'handled_by',
        'request_date',
        'return_date',
        'processed_date'
    ];

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    public function handledBy()
    {
        return $this->belongsTo(UserModel::class, 'handled_by', 'user_id');
    }

    public function items()
    {
        return $this->hasMany(BorrowRequestItemsModel::class, 'request_id', 'request_id');
    }

    public function summary()
    {
        return $this->hasMany(BorrowRequestSummaryModel::class, 'request_id', 'request_id');
    }

    public function authorizedStudents()
    {
        return $this->hasMany(BorrowRequestStudentModel::class, 'request_id', 'request_id');
    }
}
