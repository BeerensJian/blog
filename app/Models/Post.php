<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'user_id'];

    protected $with = ['author', 'category'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // By default -> Laravel assumes that the foreign key = author_id based on the function name
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
