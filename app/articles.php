<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description', 'image'
    ];

    public function categories() {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}