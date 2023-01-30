@extends('layout')

@section('content')

@php
 $noImage = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
@endphp

<section class="blog-post container">
   <article>
      <h2 class="mt-4 fs-1">{{ $data->title }} </h2>
      <h5> Author : <strong>Admin</strong> </h5>
      <img class="w-100" src="{{$data->img ? asset('storage/'.$data->img) : $noImage }}" >

      <x-BlogPost>{{ $data->content }}</x-BlogPost>

   </article>
   
</section>


@endsection




