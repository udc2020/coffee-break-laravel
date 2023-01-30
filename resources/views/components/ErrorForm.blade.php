@props(['error'])


@error($error)
<div class="alert alert-danger" role="alert">
   {{$message}}
</div>
@enderror