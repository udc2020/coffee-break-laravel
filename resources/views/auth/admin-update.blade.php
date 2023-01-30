@extends('layout')

@section('content')
    <section class="manage container">

        <h3 class="mb-3 my-4"> Update Blog</h3>
        <hr />

        <form method="POST" action="/admin/{{$blogUpdate->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titleInput" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="titleInput"
                    value="{{ $blogUpdate->title}}">


                <x-Errorform error='title' />



            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Image Blog</label>
                <input id="imgInput" name="img" class="form-control" type="file" accept="image/*"
                     onchange="priview(event)">
                <img id='imgUploded' class="mt-3 w-50"
                    src="{{asset('storage/' . $blogUpdate->img)  }}"
                    alt="" srcset="">
                <script>
                    function priview(event) {
                        if (event.target.files.length > 0) {
                            const src = URL.createObjectURL(event.target.files[0])

                            const imgUploded = document.querySelector('#imgUploded')

                            imgUploded.src = src

                        }

                    }
                </script>
            </div>


            <div class="mb-3">
                <label for="content" class="form-label">Content Blog</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="10">{{  $blogUpdate->content  }}
                </textarea>
                <x-Errorform error='content' />
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary fs-4">Update
                    Blog</button>
            </div>
        </form>

        <h3 class="mb-3 my-4">Blogs</h3>
        <hr />

        {{-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <x-TableRow :blog='$blog' />
                @endforeach



            </tbody>
        </table> --}}

        <x-Tableblogs :blogs='$blogs' />


    </section>
@endsection
