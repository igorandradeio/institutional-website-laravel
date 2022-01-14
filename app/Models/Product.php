<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

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
        'slug'
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = Str::of($product->name)->slug('-');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function search($filter = null)
    {
        $results = $this->where(function ($query) use ($filter) {
            if ($filter) {
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        })->simplePaginate(30);

        return $results;
    }
}
