<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'images', 'likes', 'shares', 'views'];

    /**
     * Check if the blog is liked by the authenticated user.
     *
     * @return bool
     */
    public function isLikedByCurrentUser()
    {
        $userId = Auth::id();
        return $this->likes()->where('user_id', $userId)->exists();
    }

    public function profiles()
    {
        return $this->belongsTo(Profile::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'blog_id');
    }

    /**
     * Like the blog.
     *
     * @return void
     */
    public function like()
    {
        $userId = Auth::id();
        if (!$this->isLikedByCurrentUser()) {
            $this->likes()->attach($userId);
            $this->increment('likes');
        }
    }

    /**
     * Unlike the blog.
     *
     * @return void
     */
    public function unlike()
    {
        $userId = Auth::id();
        if ($this->isLikedByCurrentUser()) {
            $this->likes()->detach($userId);
            $this->decrement('likes');
        }
    }

    /**
     * Define the relationship between Blog and User for likes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function likes()
    {
        return $this->belongsToMany(User::class, 'blog_likes', 'blog_id', 'user_id')->withTimestamps();
    }
}