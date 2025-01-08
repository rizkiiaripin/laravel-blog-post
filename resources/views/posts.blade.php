<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <div class="row justify-content-center  mb-5">
        <div class=" col-md-5">

          <form class="d-flex">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category')}}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author')}}">
            @endif
            <input class="form-control me-2" type="search" placeholder="Search for article" aria-label="Search" name="search" autocomplete="off">
            <button class="btn  btn-dark " type="submit"> Search</button>
          </form>
        </div>
    </div>
    @if (request('category'))
    <h2 class="my-4">{{ request('category')}}</h2>
    @endif
    @if (request('author'))
    <h2 class="my-4">{{ request('author')}}</h2>
    @endif
    {{ $post->links()}}
    
    <div class="container  position-relative ">
      <div class="row ">
          @forelse ($post as $item)
          <div class="col-md-4 mb-4">       
        <div class="card position-relative" >
          <a href="/posts?category={{ $item->category->slug }}" class=" text-sm position-absolute px-2 py-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.5)" >{{ $item->category->title}}</a>
          <img src="images/post.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">{{ Str::limit($item->body,110)}}</p>
          <p class="card-text">{{ $item->created_at->diffForHumans() }}</p>
          <div class="d-flex  justify-content-between align-items-center">
            <div>
               <a href="/posts?author={{ $item->author->name }}" class="card-text text-bold text-danger text-decoration-none ">{{ $item->author->name }}</a>
            </div>
          <a href="/post/{{$item->slug}}" class=" text-decoration-none">Read More -></a>
        </div>
        </div>
      </div>
    </div>
    @empty
    
    <p class=" text-center">Article not found</p>
    @if (request('category'))
        <a href="/posts?category={{ request('category')}}" class="text-center"> back to articles</a>
        @else
            
        <a href="/posts" class="text-center"> back to all articles</a>
    @endif
    
    @endforelse
    
  </div>
  {{ $post->links()}}
  {{-- <button class="btn btn-primary  position-fixed z-10 p-4  rounded-4 shadow " style=" right : 60px; bottom:30px;" type="button">+</button> --}}
    </div>
</x-layout>