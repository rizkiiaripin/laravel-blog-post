<x-dashboard-layout>
    <x-slot:header>Edit category</x-slot:header>
  
          <div class="row  my-4">
              <div class="col-md-6 ">
                  <form action="/dashboard/categories/{{ $category->id}}" method="post">
                      @csrf
                      @method('put')
  
                      <div class="form-floating my-3">
                          <input value='{{ $category->title }}' type="text" name="title" id="title" class="form-control"  placeholder="">
                          <label for="title" class="mb-1">title</label>
                      </div>
  
                      
  
                      <button type="submit" name="edit" class="btn btn-primary w-100">Edit</button>
                  </form>
              </div>
          </div>
      
  </x-dashboard-layout>