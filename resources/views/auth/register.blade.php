<x-layout>
    <h1>Register mew Account</h1>
    <div>
        <form action="{{ route('register') }}" method="post">
          @csrf
            {{-- username --}}
            <label for="username">Username</label><br>
            <input type="text" name="username" value = "{{ old('username') }}" class="input"><br>
            @error('username')
             <p> {{ $message }}</p>
            @enderror

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

            {{-- comfirm password --}}
            <label for="password_confirmation">Confirm Password</label><br>
            <input type="password" name="password_confirmation" class="input"><br>
              @error('password')
             <p> {{ $message }}</p>
            @enderror

            {{-- submit button --}}
            <button>Register</button>
    </div>
</x-layout>
