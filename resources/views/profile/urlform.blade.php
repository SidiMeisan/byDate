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

        <form method="POST" action="{{ route('postUrl') }}">
            @csrf
            <div class="block mt-4">
                <h2>
                    <b>Create your Get Date URL</b>
                </h2>
                <p>Choose a URL that describes you or your business in a concise way. Make it short and easy to remember so you can share links with ease.</p>
            </div>

            <div>
                <x-jet-label value="{{ __('URL') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="url" :value="old('url')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Continue') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>