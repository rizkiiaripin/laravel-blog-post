<x-dashboard-layout>
    <x-slot:header>Create New Category</x-slot:header>
  
          <div class="row  my-4">
              <div class="col-md-6 ">
                  <form action="/dashboard/categories" method="post">
                      @csrf
                      <div class="form-floating my-3">
                          <input type="text" name="title" id="title" class="form-control @error('title')
                                is-invalid
                            @enderror" value="{{old('title')}}" placeholder="">
                          <label for="title" class="mb-1">title</label>
                          @error('title')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-floating my-3">
                          <input type="text" name="slug" id="slug" class="form-control"  placeholder="">
                          <label for="slug" class="mb-1">slug</label>
                      </div>
  
                    
  
                      <button type="submit" name="store" class="btn btn-primary w-100">Add</button>
                  </form>
              </div>
          </div>
      
  </x-dashboard-layout>