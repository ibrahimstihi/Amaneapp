@extends('layout')

@section('content')

<main class="login-page">
    <section class="left-section">
        <h1>Psychologue pour enfant,pour adults ou therapie de couple, trouvez celui qui convient</h1>
        <p>over 1000 courses taught by real creatives</p>
    </section>

    <!-- ---------------------RIGHT SECTION ----------------------------- -->
    <!-- flex-col align-center justify center -->
    <section class="right-section">
    <div class="form-container flex-col align-center justify">
        <div class="avatar-container">
            <img src="/images/Logo.png" alt="amane logo">
        </div>
        <h1>sign up</h1>
        <p class="m-1">please fill us with these following infomation ?</p>
        <form action="{{ route('psychologe.matching.step.one.post') }}" method="POST">
            @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <label for="email">le nom complet</label>
            <input class="main-input my-1" type="text" id="nom" name="name" placeholder="entrer votre nom">

            <label for="email">Email</label>
            <input class="main-input my-1" type="email" id="email" name="email" placeholder="entrer votre email">

            <label for="email">numero de tele</label>
            <input class="main-input my-1" type="text" id="phone" name="phone" placeholder="entrer votre numero">

            <label for="password">Password</label>
            <input class="main-input my-1" type="password" id="password" name="password" placeholder="entrer votre password">

            <button class="main-btn-stretched" type="submit">Next</button>
        </form>
        <p class="termes">j'ai deja un compte ?<a href="./uLogin.html"><strong>se connecter</strong></a></p>
    </div>    
    </section>
</main>

@endsection