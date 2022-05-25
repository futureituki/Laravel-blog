@extends('layouts.app')

@section('content')
<div class="container">
    <div id="example"></div>
    @foreach ($data as $memo)
    <a href="/article/{{$memo->id}}">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="flex">
                <div class="px-6 py-4">
                    <h2 class="text-xl mb-2 font-bold">{{$memo->title}}</h2>
                    <p class="text-gray-700 text-base">{{$memo->content}}</p>
                </div>
                <button><a href="{{url('/delete/{id}')}}">削除する</a></button>
                <button><a href="/edit/{{$memo->id}}">編集する</a></button>
                </div><!-- /.flex -->
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
          </div>
    </a>
    @endforeach
</div>
@endsection
