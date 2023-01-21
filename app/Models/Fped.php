<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fped extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fdog(){

        return $this->belongsToMany(Dog::class, 'fped_id', 'id');
    }

    public static function search($search) {
        return empty($search) ? static::query()
            : static::query()->where('id','like', '%'.$search.'%')
                ->orWhere('callName', 'like', '%'.$search.'%')
                ->orWhere('regName', 'like', '%'.$search.'%');
    }
}

