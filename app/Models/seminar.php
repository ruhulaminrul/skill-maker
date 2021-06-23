<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;
    protected $table = 'seminars';
    protected $fillable = [
     'title', 'location', 'venue', 'date', 'price','status'
    ];
    public function perticaptes(){
        return $this->hasMany(buycourse::class,'course_id','id');
    } 
    public function trainers(){
        return $this->hasMany(seminerTrainer::class,'seminer_id','id');
    }
}
