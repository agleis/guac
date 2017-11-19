@extends('layouts.app')

@section('content')
  {{--  <editor :author="JSON.parse('{{str_replace("'", "\\'", $article->user ? $article->user->toJson() : (isset($author) ? $author : '{}'))}}')"
          :authors="JSON.parse('{{str_replace("'", "\\'", $authors->toJson())}}')"
          :region="JSON.parse('{{$article->region ? $article->region->toJson() : (isset($region) ? $region : '{}')}}')"
          :regions="JSON.parse('{{$regions->toJson()}}')"
          :category="JSON.parse('{{$article->category ? $article->category->toJson() : (isset($category) ? $category : '{}')}}')"
          :categories="JSON.parse('{{$categories->toJson()}}')"
          :country="JSON.parse('{{$article->country ? $article->country->toJson() : (isset($country) ? $country : '{}')}}')"
          :countries="JSON.parse('{{$countries->toJson()}}')"
          title="{{$article->title}}"
          text="{{$article->text}}"
          aissue="{{$article->issue}}"
          summary="{{$article->summary}}"
          city="{{$article->city}}"
          image="{{asset($article->image)}}"
          route="{{session()->has('upload') ?
            route('post_upload_article') :
            route('post_edit_article', ['name' => $article->name])}}"
          url="{{request()->url()}}">
  </editor>  --}}
  <articletext
    article-text="{{$article->text}}"
    route="{{route('edit_article', ['name' => $article->name])}}"
    :author="JSON.parse('{{str_replace("'", "\\'", $article->user)}}')"
    :region="JSON.parse('{{str_replace("'", "\\'", $article->region)}}')"
    :authors="JSON.parse('{{str_replace("'", "\\'", $authors->toJson())}}')"
    :regions="JSON.parse('{{$regions->toJson()}}')"
    title="{{$article->title}}"
    authorroute="{{route('author', ['id' => $article->user->id])}}"
    auth="{{Auth::check()}}"
    image="{{asset($article->image)}}"
    issue="{{$article->issue}}"
    category="{{$article->category->name}}"
    auth="{{Auth::check()}}"
    @auth editroute="{{route('edit_article', ['name' => $article->name])}}" @endauth
    @auth edit="{{true}}" @endauth>

  </articletext>
@endsection

@push('scripts')
    {{--  <script src="{{asset('js/ck5.js')}}"></script>  --}}
@endpush