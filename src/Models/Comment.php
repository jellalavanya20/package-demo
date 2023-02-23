<?php

namespace NewIndianic\PackageDemo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NewIndianic\PackageDemo\Models\Article;

class Comment extends Model
{
    use HasFactory;
    public function article() {
        return $this->belongsTo(Article::class);
    }

}
