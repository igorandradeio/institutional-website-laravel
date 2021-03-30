<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
