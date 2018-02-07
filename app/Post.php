<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body','user_id'];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function addComment($body,$user_id) {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => $user_id
        ]);
    }
    
    public static function archives() {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at)')
            ->get()
            ->toArray();
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
        
}
