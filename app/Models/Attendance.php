<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public function events(){
        return $this->belongsTo(Events::class);
    }
    
    public function students(){
        return $this->belongsTo(Student::class);
    }

    protected $fillable = [
        'id',
        'event_id',
        'student_id',
    ];

    protected $primaryKey = 'id';
}
