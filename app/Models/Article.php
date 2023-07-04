<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Article extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'content',
        'image',
        'author_id'
    ];
    public function author(): BelongsTo{
        return $this->belongsTo(Author::class);
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
