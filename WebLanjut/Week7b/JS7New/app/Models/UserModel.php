<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    //praktikum week 3
    use HasFactory;

    protected $table = 'm_user'; // mendefinisikan tabel yang akan digunakan
    protected $primaryKey = 'user_id'; // mendefinisikan primary key

    //praktikum week 4
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'created_at', 'updated_at'];
    //praktikum week 7b
    protected $hidden = ['password']; // jangan di tampilkan saat select 
    protected $casts = ['password' => 'hashed']; // casting password agar otomatis di hash

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class,'level_id', 'level_id');
    }
}
