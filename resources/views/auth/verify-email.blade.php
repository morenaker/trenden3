<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/1647/1647241.png" class="block h-9 w-auto" >
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Než budete pokračovat, mohli byste ověřit svou e-mailovou adresu kliknutím na odkaz, který jsme vám právě poslali e-mailem? Pokud jste email neobdrželi, rádi Vám zašleme další.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Na e-mailovou adresu, kterou jste uvedli v nastavení profilu, byl odeslán nový ověřovací odkaz.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Poslat znovu ověřovací e-mail') }}
                    </x-jet-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('Odhlásit') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
