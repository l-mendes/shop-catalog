<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property text $description
 * @property decimal $price
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    /**
     * Conversão Datas Carbon
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Relacionamento Product__X__Category
     *
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
