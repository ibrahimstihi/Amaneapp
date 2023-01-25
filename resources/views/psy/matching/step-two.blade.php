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
                    <form action="{{ route('psychologe.matching.step.two.post') }}" method="POST">
                        @csrf
                        <label for="email">Quetion 1:</label>
                        <input class="main-input my-1" type="text" name="q1p" placeholder="entrer votre nom">

                        <label for="email">Quetion 2:</label>
                        <input class="main-input my-1" type="text" name="q2p" placeholder="entrer votre email">

                        <label for="email">Quetion 3:</label>
                        <input class="main-input my-1" type="text" name="q3p" placeholder="entrer votre numero">

                        <label for="password">Quetion 4:</label>
                        <input class="main-input my-1" type="password" name="q4p" placeholder="entrer votre password">

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('psychologe.matching.step.one') }}" class="btn btn-danger pull-right">Previous</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>  
                    </form>
                
                </div>    
                </section>
            </main>


@endsection