<form method="POST" action="{{ route('auth.signin.submit') }}">
    @csrf
    <input name="name" placeholder="Login">
    <input name="password" placeholder="Password">
    <button>SignIn</button>
<form>