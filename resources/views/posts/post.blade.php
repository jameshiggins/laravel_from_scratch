<div class="blog-post">

    <a href="/posts/{{$post->id}}"><h2 class="blog-post-title">{{ $post->title }}</h2>
    </a>

    <p class="blog-post-meta">{{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</p>

    {{ $post->body }}

</div><!-- /.blog-post -->
