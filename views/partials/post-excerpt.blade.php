<article id="post-{{$post->id}}" class="post-excerpt {{$post->cssClass()}}">
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="{{$post->permalink()}}" rel="bookmark">{{$post->title()}}</a>
        </h2>
    </header>
    <div class="entry-body">
        <div class="entry-content">
            {!! $post->excerpt(150, false, 'Read More', false) !!}
        </div>
        <footer class="entry-footer">
        <span class="byline">
            {!! $post->author()->avatar(48) !!}
            <span class="screen-reader-text">{{$post->author()->displayName()}}</span>
            <a href="{{$post->author()->permalink()}}">{{$post->author()->displayName()}}</a>
        </span>
        <span class="posted-on">
            <span class="screen-reader-text">Posted</span>
            <a href="http://dev.interfacelab.io/blockquote-post-3/" rel="bookmark">
                <time class="entry-date published" datetime="{{$post->date()->toIso8601String()}}">{{$post->date()->diffForHumans()}} at {{$post->date()->format('g:i a')}}</time>
                <time class="updated" datetime="{{$post->updated()->toIso8601String()}}">{{$post->updated()->diffForHumans()}}</time>
            </a>
        </span>
        <span class="tags-links">
            <span class="screen-reader-text">Tags </span>
            @foreach($post->tags() as $tag)
                <a href="{{$tag->permalink()}}" rel="tag">{{$tag->name()}}</a>
            @endforeach
        </span>
        <span class="comments-link">
            <a href="{{$post->permalink()}}#respond">Leave a comment<span class="screen-reader-text"> on {{$post->title()}}</span></a>
        </span>
            @if (current_user_can('edit_posts', $post->id))
        <span class="edit-link">
            <a class="post-edit-link" href="{{$post->editLink()}}">Edit<span class="screen-reader-text"> "Blockquote Post"</span></a>
        </span>
            @endif
        </footer>
    </div>
</article>