<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'imagem',
        'content',
        'slug'
    ];

    protected $dates = [
        'deleted_at',
    ];
    
    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = Str::of($post->title)->slug('-');
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
