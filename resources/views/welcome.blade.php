<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
            @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
            </div>
            @if (Route::has('password.request'))
                <a class="text-primary fw-bold" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
            @endif
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2 fs-4 rounded-2">{{ __('Log in') }}</button>

        <div class="d-flex align-items-center justify-content-center mt-4">
            <p class="fs-4 mb-0 fw-bold">{{ __('New to Modernize?') }}</p>
            <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">{{ __('Create an account') }}</a>
        </div>
    </form>
</x-guest-layout>

