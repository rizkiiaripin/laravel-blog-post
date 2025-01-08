<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container">
        <div class="row gap-4 justify-content-center">
            @foreach ($category as $item)
            <div class="col-md-3 ">
            <div class=" img-thumbnail position-relative justify-content-center d-flex align-items-center ">
                <img src="{{ asset('images/categories.jpg')}}" alt="">
                <a  href="/posts?category={{ $item->slug }}" class=" position-absolute text-white p-2 w-100 text-center text-decoration-none" style="background-color: rgba(0, 0, 0, 0.644)"><h2>{{ $item->title }}</h2></a>
            </div>
        </div>
            
            @endforeach
        
        </div>
    </div>
</x-layout>