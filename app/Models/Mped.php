<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mped extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mdog(){

        return $this->belongsToMany(Dog::class, 'mped_id', 'id');
    }

    public static function search($search) {
        return empty($search) ? static::query()
            : static::query()->where('id','like', '%'.$search.'%')
                ->orWhere('callName', 'like', '%'.$search.'%')
                ->orWhere('regName', 'like', '%'.$search.'%');
    }
}
