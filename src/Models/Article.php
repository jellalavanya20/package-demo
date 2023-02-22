<?php

namespace Indianic\PackageDemo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Indianic\PackageDemo\Models\Comment;

class Article extends Model
{
    use HasFactory, Notifiable;
    protected $casts = [
        'article_published_date' => 'datetime:m-d-Y',
    ];
    public function comments() {
        return $this->hasMany(Comment::class);
    }

}
