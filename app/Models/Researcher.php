<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    use HasFactory;
    protected $guarded;
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string)\Webpatser\Uuid\Uuid::generate(4);
        });
    }
}
