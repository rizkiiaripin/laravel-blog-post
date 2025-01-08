<x-layout>
  <x-slot:title>category</x-slot:title>
  <div class="row justify-content-center  mb-5">
    <div class=" col-md-5">

      <form class="d-flex">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category')}}">
        @endif
        <input class="form-control me-2" type="search" placeholder="Search for article" aria-label="Search" name="search" autocomplete="off">
        <button class="btn  btn-dark " type="submit"> Search</button>
      </form>
    </div>
</div>
 <h3 class="my-4">{{ $title }}</h3>

      <div class="container  position-relative ">
        <div class="row ">
          @foreach ($posts as $item)
              
          <div class="col-md-4 mb-4">       
            <div class="card position-relative" >
              <a  class=" text-sm position-absolute px-2 py-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.5)" >{{ $title }} </a>
              <img src="{{asset('images/post.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">{{ $item->expert }}</p>
          <p class="card-text text-bold text-danger">{{ $item->author->name }}</p>
          <p class="card-text">{{ $item->created_at->diffForHumans() }}</p>
          <a href="/post/{{$item->slug}}" class="btn btn-primary">Read More</a>
          
        </div>
      </div>
    </div>
    @endforeach
    
    
  </div>
    </div>
</x-layout>