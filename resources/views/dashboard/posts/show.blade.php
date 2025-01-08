<x-dashboard-layout>
  <x-slot:header>{{ $post->title }}</x-slot:header>

      <div class="container my-4">
          <div class="row  justify-content-center">
         
            <div class="col-md-11 mb-4">       
              
          <div class="card " >
            <img src="{{ asset('images/post.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title my-4 text-primary">--{{ $post->category->title }}</h5>
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
            <p class="card-text">{{ $post->created_at->diffForHumans() }}</p>
            <p class="card-text text-bold text-danger">{{ $post->author->name }}</p>
              <a href="/dashboard/posts" class="btn btn-primary ">Back to Posts</a>
  
          </div>
        </div>
      </div>
      
  
        </div>
      </div>
  
  </x-dashboard-layout>