<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/1647/1647241.png" class="block h-9 w-auto" >
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Toto je zabezpečená oblast aplikace. Před pokračováním prosím potvrďte své heslo.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Heslo') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Potvrdit') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
