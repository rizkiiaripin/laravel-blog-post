<x-dashboard-layout>
    <x-slot:header>Create New Post</x-slot:header>
  
          <div class="row  my-4">
              <div class="col-md-6 ">
                  <form action="/dashboard/posts" method="post">
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
                      @csrf
                      <div class="form-floating my-3">
                          <input type="hidden" value="{{auth()->user()->id}}" name="author_id" id="author_id" class="form-control"  placeholder="">
                      </div>
                      <div class="form-floating my-3">
                          <input type="text" name="slug" id="slug" class="form-control"  placeholder="">
                          <label for="slug" class="mb-1">slug</label>
                      </div>
  
                      <div class="form-floating my-3">
                          <textarea name="body" id="" cols="30" rows="10" class="form-control" >
  
                          </textarea>
                          <label for="body" class="mb-1">body</label>
                      </div>
                      <div class="form-floating mb-3">
                        <select class="form-control" name="category" id="floatingInput" required>
                        <option value="-">choise category</option>
                        @foreach ($category as $category)
                            
                        <option value="{{$category->id}}">{{    $category->title}}</option>
                        @endforeach
                        
                        </select>
                        <label for="floatingInput">kategori Buku</label>
                        
                    </div>
                    
  
                      <button type="submit" name="store" class="btn btn-primary w-100">Add</button>
                  </form>
              </div>
          </div>
      
  </x-dashboard-layout>