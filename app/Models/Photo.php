<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "category_id",
        "album_id",
        "image",
        "title",
        "deskription",
        "private",
        "on_comments",
        "photo_draft",
        "expired_at",
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
    
    public function category(){
        return $this->belongsTo(Category::class,"category_id" ,"id");
    }

    public function album(){
        return $this->belongsTo(Album::class,"album_id","id");
    }
}
