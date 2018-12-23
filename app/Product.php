<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Set model validation rules.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'name' => 'required|string|between:3,50',
            'price' => 'required|numeric|between:0,10000',
            'description' => 'string|between:3,500',
        ];
    }
}
