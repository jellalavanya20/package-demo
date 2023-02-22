<?php

namespace Indianic\PackageDemo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Indianic\PackageDemo\Models\Article;

class Comment extends Model
{
    use HasFactory;
    public function article() {
        return $this->belongsTo(Article::class);
        }

}
