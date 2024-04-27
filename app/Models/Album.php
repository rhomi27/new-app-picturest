<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "title",
        "description",
        "thumbnail",
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function($model){
        $model->uuid = $model->uuid ?: Uuid::uuid4()->toString();
       }); 
    }

    public function users(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
