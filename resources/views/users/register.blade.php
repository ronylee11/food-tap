<x-layout>
    <x-card class="flex-column justify-content-start">
        <h1>Register</h1>
        <form action="/register" method="post">
            @csrf
            <label for="name">Username:</label>
            <input type="text" id="name" name="name">
            @error('username')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <br />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <br />

            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <br />


            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </x-card>
</x-layout>
