<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'tbl_users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        // 'profile_path',
        'username',
        'name',
        'password',
        'email',
        'role_id',
        'date_created',
        'last_updated'
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
