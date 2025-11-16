<x-layouts.auth>
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Join us today and start your journey. All fields are required to create your account.')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Name -->
            <flux:input
                name="name"
                :label="__('Name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')" />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com" />

            <!-- Password -->
            <div class="flex flex-col gap-2">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="new-password"
                    :placeholder="__('Password')"
                    viewable />
                <flux:text class="text-xs text-zinc-500 dark:text-zinc-400">
                    {{ __('Use at least 8 characters with a mix of letters, numbers, and symbols.') }}
                </flux:text>
            </div>

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Confirm password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                viewable />

            <!-- Terms and Privacy -->
            <div class="text-xs text-center text-zinc-500 dark:text-zinc-400">
                {{ __('By creating an account, you agree to our') }}
                <flux:link href="#" class="text-zinc-700 dark:text-zinc-300">{{ __('Terms of Service') }}</flux:link>
                {{ __('and') }}
                <flux:link href="#" class="text-zinc-700 dark:text-zinc-300">{{ __('Privacy Policy') }}</flux:link>
            </div>

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts.auth>
