<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ 'img/rating.png' }}">
            </a>

            <div class="flex items-center justify-center mt-4">
                <ul class="navbar-nav">
                    @foreach(config('app.languages') as $language => $name)
                        <li class="nav-item inline-flex">
                            <a class="nav-link" href="{{ route('language', $language) }}">
                                <img src="{{ asset("img/flag-$language.png") }}" alt="{{ $name }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="{{ __('terms.email') }}" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password"
                              placeholder="{{ __('terms.password') }}" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="ml-3">
                    {{ __('auth.login') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
