<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'user_id'];

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when($filters['search'] ?? false, function (Builder $query){
            $query
                ->where('title', 'like', "%". request('search') ."%")
                ->orWhere('body', 'like', "%" . request('search') . "%");
        });

        $query->when($filters["category"] ?? false, function (Builder $query, string $category) {
            $query->whereHas('category', function (Builder $query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters["author"] ?? false, function (Builder $query, string $author) {
            $query->whereHas('author', function (Builder $query) use ($author){
                $query->where('username', $author);
            });
        });
    }

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
