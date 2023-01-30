@props(['blogs'])
<table class="table">
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
</table>