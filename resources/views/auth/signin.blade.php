@extends('layout')

@section('content')

<section class="sign container">
   <div class="row mt-4">
   

      <div class="col">
         <form method="POST" action="/users">
            @csrf
            <h3>Sign Up</h3>
            <div class="mb-3">
               <label for="exampleInputUser" class="form-label">User Name </label>
               <input name="name" type="text" class="form-control" id="exampleInputUser" aria-describedby="nameHelp">
               <x-ErrorForm error='name' />
            </div>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               <x-ErrorForm error='email' />
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input name="password" type="password" class="form-control" id="exampleInputPassword1">
               <x-ErrorForm error='password' />
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div>
</section>

@endsection