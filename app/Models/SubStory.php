<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubStory extends Model
{
    use HasFactory ;
    protected $guarded;
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string)\Webpatser\Uuid\Uuid::generate(4);
        });
    }

    public function story()
    {
        return $this->belongsTo(Story::class);
    }
}
