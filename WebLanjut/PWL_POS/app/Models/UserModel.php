<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    //praktikum week 3
    use HasFactory;

    protected $table = 'm_user'; // mendefinisikan tabel yang akan digunakan
    protected $primaryKey = 'user_id'; // mendefinisikan primary key

    //praktikum week 4
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    // protected $fillable = [
    //     'level_id',
    //     'username',
    //     'nama'
    // ];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class,'level_id', 'level_id');
    }
}
