<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'tbl_users';
    protected $primaryKey = 'user_id';
    public $incrementing = false; // <== important
    protected $keyType = 'string'; // <== important

    protected $fillable = [
        'user_id',
        'username',
        'name',
        'password',
        'email',
        'role_id',
    ];

    public function borrowRequests()
    {
        return $this->hasMany(BorrowRequestModel::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(RoleModel::class, 'role_id', 'role_id');
    }
}
