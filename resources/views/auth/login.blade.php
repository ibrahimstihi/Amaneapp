@extends('layout')
@section('content')
<main class="login-page">
    <section class="left-section">
        <h1>Psychologue pour enfant,pour adults ou therapie de couple, trouvez celui qui convient</h1>
        <p>over 1000 courses taught by real creatives</p>
    </section>

    <!-- ---------------------RIGHT SECTION ----------------------------- -->

    <section class="right-section">
    <div class="form-container flex-col align-center">
        <div class="avatar-container">
            <img src="/images/Logo.png" alt="amane logo">
        </div>
        <h1>login</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <label for="email">Email</label>
            <input class="main-input" type="email" id="email" name="email" placeholder="entrer votre email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <label for="password">Password</label>
            <input class="main-input" type="password" id="password" name="password" placeholder="entrer votre password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <button class="main-btn-stretched" type="submit">Se connecter</button>
        </form>
        <p class="termes">Vous n'avez pas un compte? <strong><a href="./uSignUp.html">s'inscrire</a></strong></p>
    </div>    
    </section>
</main>
@endsection