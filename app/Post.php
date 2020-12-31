<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected  $guarded = [];
    protected $dates = ['published_at'];

    public function category($value='') {
        return $this->BelongsTo(Category::class);
    }
    public function tags() {
        return $this->BelongsToMany(Tag::class);
    }
}
