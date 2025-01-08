<x-layout>
    <x-slot:title>login</x-slot:title>
    <div class="row justify-content-center">
        <div class="col-md-5 ">
            <h2 class="text-center mb-4">Please Login</h2>
            @if (session('success'))
            <div class="text-danger">{{ session('success') }}</div>
                {{-- <p>hsisa</p> --}}
            @endif
            @if (session('errorLogin'))
            <div class="text-danger">{{ session('errorLogin') }}</div>
                {{-- <p>hsisa</p> --}}
            @endif
           
            <form action="/login_submit" method="post">
                @csrf
                <div class="form-floating my-3">
                    <input type="email" name="email" id="email" class="form-control 
            @error('email')
                is-invalid
            @enderror" placeholder="" value="{{old('email')}}" autocomplete="">
                    <label for="Email" class="mb-1">Email Address</label>
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-floating my-3">
                    <input type="password" name="password" id="password" class="form-control @error('email')
                is-invalid
            @enderror" placeholder="">
                    <label for="password" class="mb-1">Password</label>
                    @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            </form>
            <small>don't Register yet ? <a href="/register" class=" text-decoration-none">Register Here</a></small>
        </div>
    </div>
</x-layout>