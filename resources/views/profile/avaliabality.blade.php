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

        <form method="POST" action="{{ route('postAvaliabality') }}">
            @csrf
            <div class="block mt-4">
                <h2>
                    <b>Set your availability</b>
                </h2>
                <p>Let Get Date know when you’re typically available to accept meetings.</p>
            </div>
            <br>
            <div class="mt-4">
                <x-jet-label value="{{ __('Available hours') }}" />
                <x-jet-input class="block mt-1 w-half" type="text" name="hour_from" :value="old('hour_from')" required autofocus /> To
                <x-jet-input class="block mt-1 w-half" type="text" name="hour_to" :value="old('hour_to')" required autofocus />
            </div>
            <div class="block mt-4">
                <label for="Monday" class="flex items-center">
                    <x-jet-checkbox id="Monday" name="Days[]" value="Monday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Monday') }}</span>
                </label>
                <label for="Tuesday" class="flex items-center">
                    <x-jet-checkbox id="Tuesday" name="Days[]" value="Tuesday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Tuesday') }}</span>
                </label>
                <label for="Wednesday" class="flex items-center">
                    <x-jet-checkbox id="Wednesday" name="Days[]" value="Wednesday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Wednesday') }}</span>
                </label>
                <label for="Thurday" class="flex items-center">
                    <x-jet-checkbox id="Thurday" name="Days[]" value="Thurday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Thurday') }}</span>
                </label>
                <label for="Friday" class="flex items-center">
                    <x-jet-checkbox id="Friday" name="Days[]" value="Friday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Friday') }}</span>
                </label>
                <label for="Saturday" class="flex items-center">
                    <x-jet-checkbox id="Saturday" name="Days[]" value="Saturday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Saturday') }}</span>
                </label>
                <label for="Sunday" class="flex items-center">
                    <x-jet-checkbox id="Sunday" name="Days[]" value="Sunday" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Sunday') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Continue') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>