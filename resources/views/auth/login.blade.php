<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<form method="POST" action="{{ route('login') }}">
        @csrf
    <h1>Employer Log in</h1>
    <div class="inset">
    <p>
      <label for="email">EMAIL ADDRESS</label>
      <input type="text" name="email" id="email" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </p>
    <p>
      <label for="password">PASSWORD</label>
      <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    </p>
    <p>
      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      <label for="remember">Remember me</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </p>
    </div>
    <p class="p-container">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                <span>Forgot password ?</span>
            </a>
        @endif
      <input type="submit" name="go" id="go" value="Log in">
    </p>
  </form>

  