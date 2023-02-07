<form method="POST" action="{{ route("auth.signup.submit") }}">
    @csrf
    <input type="text" name="name" placeholder="Login" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password_confirmation" placeholder="Confirm Password" />
    <input type="text" name="email" placeholder="Email" />
    <input type="text" name="phone" placeholder="Phone" />
    <button>Register</button>
</form>