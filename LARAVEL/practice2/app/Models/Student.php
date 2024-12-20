<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'stu_id'; // Custom primary key
    public $incrementing = false; // Disable auto-increment
    protected $keyType = 'string'; // Use string as primary key

    protected $fillable = ['stu_id', 'stu_name', 'stu_email']; // Fillable fields

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
