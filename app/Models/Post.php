<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'user_id', 'body'];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Scope a query to only include  users.
     */
    public function ScopeFilter(Builder $query, array $filter): void
    {
        $query->when($filter['search'] ?? false, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filter['categories'] ?? false, function ($query, $category) {
            // $query->whereHas('category', function (Builder $query) use ($category) {
            //     $query->where('slug', 'like', '%' . $category . '%');
            // });
            $query->whereHas(
                'category',
                fn(Builder $query) => $query->where('slug', 'like', '%' . $category . '%')
            );
        });

        $query->when($filter['authors'] ?? false, function ($query, $author) {
            $query->whereHas(
                'author',
                fn(Builder $query) => $query->where('username', 'like', '%' . $author . '%')
            );
        });
    }
}
