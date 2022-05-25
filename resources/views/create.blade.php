@extends('layouts.app')
@section('content')
<html lang="en">
    <body>
  <form action="{{url('/create/add')}}" method="POST" class="grid grid-cols-1 gap-6 m-16">
    @csrf
    <input type="hidden" name="user_id" value="{{$user['id']}}">
    <label class="block">
      <span class="text-gray-700">タイトル</span>
      <input type="text"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="初投稿" name="title">
    </label>
    <label class="block">
      <span class="text-gray-700">内容</span>
      <textarea
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        rows="3" name="content" type="text"></textarea>
    </label>
    <button type="submit">追加する</button>
  </form>
</body>
</html>
@endsection
