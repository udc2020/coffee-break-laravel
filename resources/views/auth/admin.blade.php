@extends('layout')

@section('content')
    <section class="manage container">

        <h3 class="mb-3 my-4"> New Blog</h3>
        <hr />

        <form method="POST" action="/admin" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="titleInput" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="titleInput">


                <x-Errorform error='title' />



            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Image Blog</label>
                <input id="imgInput" name="img" class="form-control" type="file" accept="image/*"
                    value="{{ !empty($blogUpdate) ? asset('storage/' . $blogUpdate->img) : '' }}" onchange="priview(event)">
                <img id='imgUploded' class="mt-3 w-50"
                    src="{{ !empty($blogUpdate) ? asset('storage/' . $blogUpdate->img) : ' https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns=' }}"
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
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                <x-Errorform error='content' />
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary fs-4">New Blog</button>
            </div>
        </form>

        <h3 class="mb-3 my-4">Blogs</h3>
        <hr />


        <x-Tableblogs :blogs='$blogs' />


    </section>
@endsection
