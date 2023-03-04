<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <p class="login-username">
                <x-input-label for="current_password" :value="__('Current Password')" /><br>
                <x-text-input type="password" name="current_password" id="user_login" autocomplete="username" class="input"  class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </p>
        </div>

        <div>
            <p class="login-username">
                <x-input-label for="password" :value="__('New Password')" /><br>
                <x-text-input id="user_login" name="password" type="password" autocomplete="username" class="input" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </p>
        </div>

        <div>
            <p class="login-username">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" /><br>
                <x-text-input id="user_login" name="password_confirmation" type="password" autocomplete="username" class="input" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </p>
        </div>

        <div class="flex items-center gap-4">
            <p class="login-submit">
                <x-primary-button type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Save">
                    {{ __('Save') }}
                </x-primary-button>
            </p>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
