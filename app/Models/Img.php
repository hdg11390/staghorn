<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dimg()
    {
        return $this->hasOne(Dog::class, 'id', 'dog_id');
    }

    public static function search($search) {
        return empty($search) ? static::query()
            : static::query()->where('id','like', '%'.$search.'%')
                ->orWhere('callName', 'like', '%'.$search.'%');

    }
}
