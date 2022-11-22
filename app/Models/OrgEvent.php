<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgEvent extends Model
{
    use HasFactory;
    public function attendance(){
        return $this->hasMany(Attendance::class);
    }

    public $timestamps = false;

    protected $fillable = [
        'id',
        'event_name'
    ];
    
    protected $primaryKey = 'id';
    public $incrementing = false;
}
