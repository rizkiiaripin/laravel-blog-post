<x-dashboard-layout>
  <x-slot:header>Edit Post</x-slot:header>

        <div class="row  my-4">
            <div class="col-md-6 ">
                <form action="/dashboard/posts/{{ $post->id}}" method="post">
                    @csrf
                    @method('put')

                    <div class="form-floating my-3">
                        <input value='{{ $post->title }}' type="text" name="title" id="title" class="form-control"  placeholder="">
                        <label for="title" class="mb-1">title</label>
                    </div>

                    <div class="form-floating my-3">
                        <textarea name="body" id="" cols="30" rows="10" class="form-control" >{{ $post->body }}

                        </textarea>
                        <label for="body" class="mb-1">body</label>
                    </div>
                    

                    <button type="submit" name="edit" class="btn btn-primary w-100">Edit</button>
                </form>
            </div>
        </div>
</x-dashboard-layout>