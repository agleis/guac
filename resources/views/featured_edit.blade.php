@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/featured.js') }}"></script>
@endpush

@section('content')
  <form method="post" action="{{route('edit_featured')}}">
    {{ csrf_field() }}
    <div class="form-group container">
        @foreach($articles as $article)
            @if($loop->index % 3 == 0) <div class="row"> @endif
            <div data-id="{{$article->name}}" class="col-md-4 featured-edit @if($article->featured) featured-selected @endif">
                @include('includes.summary3', ['article' => $article, 'nolink' => true])
            </div>
            <div class="hidden check__column">
                <div class="center">
                    <label class="label">
                        <input type="checkbox" id="{{$article->name}}" name="featured[]" class="label__checkbox" value="{{$article->name}}" @if($article->featured) checked @endif />
                        <span class="label__text">
                            <span class="label__check">
                                {{--  <i class="fa fa-check icon"></i>  --}}
                            </span>
                        </span>
                    </label>
                </div>
            </div>
            @if($loop->index % 3 == 2) </div> @endif
        @endforeach
        <div class="button more right-float-button">
            <button type="submit">Edit Featured</button>
        </div>
    </div>
  </form>
@endsection


