<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowRequestStudentModel extends Model
{
    protected $table = 'tbl_borrow_request_students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'request_id',
        'student_id',
        'name',
    ];

    public function borrowRequest()
    {
        return $this->belongsTo(BorrowRequestModel::class, 'request_id', 'request_id');
    }
}
