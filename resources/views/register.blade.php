<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="row justify-content-center ">
        <div class="col-md-5 ">
            <h2 class="text-center mb-4">Registration form </h2>
            <form action="{{ route('submit_register')}}" method="post">
                @csrf
                <div class="form-floating my-3">
                    <input value='{{ old('name')}}' type="text" name="name" id="name" class="form-control @error('name')
                        is-invalid
                    @enderror "  placeholder="">
                    <label for="name" class="mb-1">Name</label>
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating my-3">
                    <input value='{{ old('username')}}' type="text" name="username" id="username" class="form-control   @error('username')
                        is-invalid
                    @enderror "  placeholder="">
                    <label for="username" class="mb-1">Username</label>
                    @error('username')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    
                </div>
                
                <div class="form-floating my-3">
                    <input value='{{ old('email')}}' type="email" name="email" id="email" class="form-control   @error('email')
                        is-invalid
                    @enderror "  placeholder="">
                    <label for="Email" class="mb-1">Email Address</label>
                    
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating my-3">
                    <input  type="password" name="password" id="password" class="form-control   @error('password')
                        is-invalid
                    @enderror "  placeholder="">
                    <label for="password" class="mb-1">Password</label>
                    @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
            </form>
            <small>already registered ? <a href="/login" class=" text-decoration-none">Login Here</a></small>
        </div>
    </div>
</x-layout>