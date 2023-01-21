<?php

namespace App\Models;

use App\Models\Img;
use App\Models\Fped;
use App\Models\Mped;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dogs extends Model
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
