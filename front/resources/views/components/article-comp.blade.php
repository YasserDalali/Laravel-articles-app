<div class="blog-post card">
    <div class="card-header">
    <h2 class="blog-post-title">{{ $article->title }}</h2>
    <p class="blog-post-meta"> 

    @if ($article->created_at != NULL) 
        {{$article->created_at->format('Y M d, H:i')}}
      
    @endif
        
        
    by <a href="#">Jacob</a></p>
</div>
<div class="card-body">
    <p>{{ Str::limit($article->body, 250, "")}} <a class="text-muted" href="article/{{$article->id}}">... Continue Reading</a></p>
</div>
</div><!-- /.blog-post -->
