@props(['blog'])

@php
 $noImage = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
@endphp

<div {{ $attributes->merge([
    'class' => 'col col-3 mt-3',
]) }}>

    <a href='/blogs/{{ $blog->id }}' class="blog ">
        <div class="card" style="width: 18rem;aspect-ratio:1/1">
            <img src="{{ $blog->img ? asset('storage/'.$blog->img) : $noImage }}" class="card-img-top mh-100 h-100 ratio ratio-1x1" alt="{{ $blog->title }}">
            <div class="card-body">
                <p class="card-text">{{ $blog->title }}</p>
            </div>
        </div>
    </a>
</div>
