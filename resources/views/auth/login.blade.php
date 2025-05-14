<x-layout>
    <h1>Welcome back</h1>
    <div>
        <form action="{{ route('login') }}" method="post">
          @csrf
          
            {{-- email --}}
            <label for="email">email</label><br>
            <input type="text" name="email" value="{{ old('email') }}" class="input"><br>
             @error('email')
             <p> {{ $message }}</p>
            @enderror

            {{-- password --}}
            <label for="password">password</label><br>
            <input type="password" name="password" class="input"><br>
             @error('password')
             <p> {{ $message }}</p>
            @enderror

            {{-- remember checkbox --}}
             <div>
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">Remember me</label>
            </div>
             @error('failed')
             <p> {{ $message }}</p>
            @enderror

            {{-- login button --}}
            <button>Login</button>

           
    </div>
</x-layout>
