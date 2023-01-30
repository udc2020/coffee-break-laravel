@extends('layout')

@section('content')
    <section class="blogs container">
        <h2 class="h3 mt-4">Blogs</h2>
        <hr>
        <div class="row ">
          @unless(count($data) <= 0)
          @foreach ($data as $d)
          <x-BlogCard :blog='$d' />
          {{-- <div class="col col-3 mt-3">
                       
                        <a href='/blogs/{{ $d['id'] }}' class="blog ">
                          <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">{{ $d['title'] }}</p>
                            </div>
                          </div>
                        </a>
                      </div> --}}
                    @endforeach
                @else
                    <p>No data come from data base </p>
                 
                @endunless
        </div>
@endsection
