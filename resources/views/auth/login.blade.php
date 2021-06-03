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

        <form method="POST" action="#">

            <div class="block mt-4">
                <label class="flex items-center">
                    <p>The easiest way for you to sign up is with Google. This will automatically connect your calendar so you can start using By Date right away!</p>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <a href="{{ url('auth/google') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2">
                    <strong>Google Login</strong>
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>