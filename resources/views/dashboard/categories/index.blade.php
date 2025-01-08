<x-dashboard-layout>
    <x-slot:header>Categories</x-slot:header>
    <a href="/dashboard/categories/create" > <button class="btn bg-primary border-0 text-white " >Add New Category</button></a>
    
      <div class="m-3">
     
      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">Number</th>
              <th scope="col">title</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody >
              @foreach ($Categories as $Categories)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$Categories->title}}</td>
                <td>
                  <a href="/dashboard/categories/{{$Categories->id}}/edit" class="btn bg-primary">Edit</a>
                  <form action="/dashboard/categories/{{$Categories->id}}" class="d-inline" method="POST">
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