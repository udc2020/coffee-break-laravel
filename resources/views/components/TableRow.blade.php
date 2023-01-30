@props(['blog'])


<tr>
   <th scope="row">{{$blog->id}}</th>
   <td>Mark</td>
   <td>{{$blog->title}}
   </td>
   <td>
      <a href="/blogs/{{$blog->id}}" target="_blank" class="btn btn-secondary">View</a>
      <a href="/admin/blogs/{{$blog->id}}/edit" class="btn btn-success">Edit</a>
      <!-- <form class="d-inline" action="/admin/blogs/{{$blog->id}}/delete" method="post">
         @csrf
         @method('DELETE')
      <button  class="btn btn-danger">Delete</button>
      </form> -->

      <a href="/admin/blogs/{{$blog->id}}/delete"  class="btn btn-danger">Delete</a>
      
   </td>
</tr>