<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'msg'
    ];

    public static function search($search) {
        return empty($search) ? static::query()
            : static::query()->where('id','like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%');
    }
}
