@if(count($articles)>0)
@foreach($articles as $article)
<div class="post-preview">
    <a href="{{route('single', [$article->getCategory->slug,$article->slug]   )}}">
        <h2 class="post-title">
            {{$article->title}}
        </h2>
        <img src="{{$article->image}}" />
        <h3 class="post-subtitle">
            {!!str_limit($article->content,75)!!}
        </h3>
    </a>
    <p class="post-meta"> Kategori :
      <a href="#">{{$article->getCategory->name}}</a>
      <span class="float-right">{{$article->created_at->diffForHumans()}}</span></p>
</div>
@if(!$loop->last)
  <hr>
@endif
@endforeach
<div class="float-center">
  {{$articles->links()}}
</div>
@else
  <div class="alert alert-danger">
    <h1>Bu kategoriye ait yazı bulunamadı.</h1>
  </div>
@endif
