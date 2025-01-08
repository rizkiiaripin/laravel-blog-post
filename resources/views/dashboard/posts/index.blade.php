<x-dashboard-layout> 
  <x-slot:header>My Posts</x-slot:header>
  <a href="/dashboard/posts/create" class="btn bg-primary border-0 text-white" >Create new Post</a>

    <div class="m-3">
   
    <div class="table-responsive">
      <table class="table table-striped table-sm text-center">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody >
            @foreach ($posts as $posts)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$posts->title}}</td>
              <td>{{$posts->category->title}}</td>
              <td>
                <a href="/dashboard/posts/{{$posts->id}}" class="btn bg-info">see more</a>
                <a href="/dashboard/posts/{{$posts->id}}/edit" class="btn bg-primary">Edit</a>
                <form action="/dashboard/posts/{{$posts->id}}" class="d-inline" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn bg-danger border-0" onclick="return confirm('are you sure ?')">X</button>
                </form>
              </td>
                
            @endforeach
          </tr>
        </tbody>
      </table>
    </div>
</div>
</x-dashboard-layout>