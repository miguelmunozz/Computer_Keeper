<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'role_user';
    use HasFactory;

   
    protected $fillable =
        ['id', 'role_id', 'user_id'];
}
