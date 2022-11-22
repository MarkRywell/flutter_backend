<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }

    public function positions(){
        return $this->belongsTo(Position::class);
    }

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'name',
        'year',
        'section',
        'position_id'
    ];

    protected $primaryKey = 'id';
    
    public $incrementing = false;
}
