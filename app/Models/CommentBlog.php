<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentBlog extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int>
     */
    protected $fillable = [
        'userId',
        'blogId'
    ];

    /**
     * Summary of blogs
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blogs()
    {
        return $this->belongsTo(Blog::class, 'blogId', 'id');
    }

    /**
     * Summary of users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
