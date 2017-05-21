<?php

namespace App;

use Carbon\Carbon;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $fillable = ['title', 'body'];
    public function comments()
    {
        return $this->hasMany(Comment::class);

    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));

//                Comment::create([
//            'body' => request('body'),
//            'post_id' =>  $this->id
//
//        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {

        $posts = Post::latest();

        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
//        $posts = $posts->get();

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->orderByRaw('min(created_at) desc')
            ->groupBy('year', 'month')
            ->get()
            ->toArray();
    }
}
