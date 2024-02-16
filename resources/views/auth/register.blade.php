<x-guest-layout>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="email" class="block mb-1 text-base font-medium text-gray-600 text-capitalize ">email</label>
            <x-input type='email' name='email' placeholder='john@domain.com'></x-input>
            @error('email')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="name" class="block mb-1 text-base font-medium text-gray-600 text-uppercase ">name</label>
            <x-input type='name' name='name' placeholder='john@domain.com'></x-input>
            @error('name')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="grid md:grid-cols-2 gap-x-2">
            <div class="mb-4">
                <label for="password"
                    class="block mb-1 text-base font-medium text-gray-600 text-capitalize ">Password</label>
                <x-input type='password' name='password' placeholder='*********'></x-input>
                @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation"
                    class="block mb-1 text-gray-600 text-basefont-medium text-capitalize ">Confirm
                    Password</label>
                <x-input type='password' name='password_confirmation' placeholder='*********'></x-input>
            </div>
        </div>
        <x-button>Register</x-button>
    </form>
</x-guest-layout>
