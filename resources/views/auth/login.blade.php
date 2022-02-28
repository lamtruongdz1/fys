<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ghi Nhớ') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Đăng nhập') }}
                </x-jet-button>
            </div>
            <div class="flex justify-between items-center mt-3">
                <hr class="w-full"> <span class="p-2 text-gray-400 mb-1">OR</span>
                <hr class="w-full">
            </div>
            <!-- Login with social -->
            <button class="uppercase h-12 mt-3 text-white w-full rounded bg-blue-800 hover:bg-blue-900">
                <i class="fa fa-facebook mr-2"></i>Facebook
            </button> 
            <button class="uppercase h-12 mt-3 text-white w-full rounded bg-red-800 hover:bg-red-900">
                <i class="fa fa-google mr-2"></i>Google
            </button>
            <button class="uppercase h-12 mt-3 text-white w-full rounded bg-black hover:bg-black">
                <i class="fa fa-github mr-2"></i>Github
            </button>
            <!-- end login with social -->
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
