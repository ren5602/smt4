<?php
//mendeklarasikan app\models untuk bisa digunakan di yabg lain
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // notes
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
}
