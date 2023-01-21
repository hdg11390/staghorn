<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function mped()
    {
    return $this->hasOne(Mped::class, 'id', 'mped_id');
    }

    public function fped()
    { 
        return $this->hasOne(Fped::class, 'id', 'fped_id');
    }

    public function img()
    {
            return $this->hasMany(Img::class, 'dog_id', 'id');
    }

    public static function search($search) {
        return empty($search) ? static::query()
            : static::query()->where('id','like', '%'.$search.'%')
                ->orWhere('callName', 'like', '%'.$search.'%')
                ->orWhere('regName', 'like', '%'.$search.'%');
    }
}

