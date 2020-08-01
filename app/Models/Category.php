<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property timestamp $created_at
 * @property timestap $updated_at
 */
class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
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
     * Relacionamento Category__X__Product
     *
     * @return mixed
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
