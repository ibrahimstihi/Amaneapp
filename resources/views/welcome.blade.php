@extends('layout')
@section('content')
      <!-- ------------------------------------ HERO SECTION ---------------------------------- -->
      <header class="hero w-screen h-screen">
        <div class="container center">
          <div class="content">
            <h1 class="my-2">You deserve to be happy.</h1>
            <p class="my-1">What type of therapy are you looking for?</p>
            <button class="main-btn">
              Thérapie individuelle <br /><span>(pour moi)</span>
            </button>
            <button class="main-btn">
              Thérapie de couple<br /><span>(pour moi et mon partenaire)</span>
            </button>
            <button class="main-btn">
              Thérapie adolescent<br /><span>(pour mes enfants)</span>
            </button>
          </div>
        </div>
      </header>
      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
      <!-- ---------------------------------- MOTIVATION ---------------------------------- -->
      <section class="motivation center w-screen">
        <h1>
          The world's largest therapy service. <strong>100% online.</strong>
        </h1>
        <div class="flex justify-between align-center mb-flex-col my-2">
          <div class="numbers flex-wrap flex-col justify-center m-2">
            <h1 class="number">+460</h1>
            <p>People got help</p>
          </div>
          <div class="numbers flex-col justify-center mx-2">
            <h1 class="number">+60</h1>
            <p>Licensed therapists ready to help</p>
          </div>
          <div class="numbers flex-col justify-center mx-2">
            <h1 class="number">+34 050</h1>
            <p>Messages, chat, phone, video sessions</p>
          </div>
        </div>
      </section>

      <!-- ---------------------------------- Details ----------------------------------- -->
      <section class="details w-screen">
        <div class="container flex-col justify-center" id="down">
          <h1>
            Des thérapeutes professionnels, agréés et approuvés en qui vous
            pouvez avoir confiance
          </h1>
          <div class="pictures">
            <img src="/images/praticiens.png" alt="nos praticiens" />
          </div>
          <p>
            Faites appel au plus grand réseau mondial de thérapeutes agréés,
            accrédités et expérimentés qui peuvent vous aider à résoudre divers
            problèmes, notamment la dépression, l'anxiété, les relations, les
            traumatismes, le deuil, etc. Avec nos thérapeutes, vous obtenez le
            même professionnalisme et la même qualité que vous attendez d'un
            thérapeute en cabinet, mais avec la capacité de communiquer quand et
            comme vous le souhaitez.
          </p>
          <button class="p-1 my-1">Être jumelé à un thérapeute</button>
        </div>
      </section>
      <!-- ----------------------------------- SPONSOR ----------------------------------- -->
      <section class="sponsor">
        <div data-aos="fade-right">
          <img src="/images/iscae.png" alt="incubation" />
        </div>
        <div data-aos="fade-left">
          <img src="/images/boa.png" alt="incubation" />
        </div>
      </section>
    </div>
    <!-- ------------------------------------- HOW IT WORKS ------------------------------------- -->
    <section class="working-steps flex-col align-center justify-center p-gap">
      <h1>tout d'abord inscrivez vous</h1>
      <div
        class="container matching-content flex justify-between align-center py-2 mb-flex-col"
      >
        <div class="image-container">
          <img src="/images/step1.png" alt="etape 1 inscription" />
        </div>
        <p class="step-desc">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae
          repellendus fuga, vitae in voluptatibus suscipit laborum accusamus
          adipisci dolorem asperiores iste, nemo natus delectus error molestias
          nostrum eius, alias voluptates. Impedit, repudiandae cum in obcaecati
          minima ab iure explicabo excepturi
        </p>
      </div>
      <i class="uil uil-location-arrow-alt arrow py-2"></i>
      <h1>Faites-vous correspondre avec le meilleur thérapeute pour vous</h1>
      <div
        class="container matching-content flex-rev justify-between align-center py-2 mb-flex-col"
      >
        <div class="image-container">
          <img src="/images/step2.png" alt="etape 1 inscription" />
        </div>
        <p class="step-desc">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae
          repellendus fuga, vitae in voluptatibus suscipit laborum accusamus
          adipisci dolorem asperiores iste, nemo natus delectus error molestias
          nostrum eius, alias voluptates. Impedit, repudiandae cum in obcaecati
          minima ab iure explicabo excepturi
        </p>
      </div>
      <i class="uil uil-location-arrow-alt arrow py-2"></i>
      <h1>Thérapie quand vous en avez besoin et partouts</h1>
      <div
        class="container matching-content flex justify-between align-center py-2 mb-flex-col"
      >
        <div class="image-container">
          <img src="/images/step3.png" alt="etape 1 inscription" />
        </div>
        <p class="step-desc">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae
          repellendus fuga, vitae in voluptatibus suscipit laborum accusamus
          adipisci dolorem asperiores iste, nemo natus delectus error molestias
          nostrum eius, alias voluptates. Impedit, repudiandae cum in obcaecati
          minima ab iure explicabo excepturi
        </p>
      </div>
    </section>

    <!-- ---------------------------------- FAQ ----------------------------------- -->
    <section class="faq p-gap">
      <div class="container">
        <h1>Frequently Asked Questions</h1>
        <!-- -------------- QUESTION ONE -------------- -->
        <div class="question-container m-2" id="faq">
          <div class="question flex justify-between p-1 my-1">
            <h3>question content</h3>
            <i class="uil uil-angle-right-b"></i>
          </div>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium enim nam at dicta magnam. Facere dolorum eum mollitia,
              delectus excepturi necessitatibus quaerat, ipsum culpa autem iusto
              accusantium ipsa. Quos, dolores!
            </p>
          </div>
        </div>
        <!-- -------------- QUESTION TWO -------------- -->
        <div class="question-container m-2" id="faq">
          <div class="question flex justify-between p-1 my-1">
            <h3>question content</h3>
            <i class="uil uil-angle-right-b"></i>
          </div>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium enim nam at dicta magnam. Facere dolorum eum mollitia,
              delectus excepturi necessitatibus quaerat, ipsum culpa autem iusto
              accusantium ipsa. Quos, dolores!
            </p>
          </div>
        </div>
        <!-- -------------- QUESTION THREE -------------- -->
        <div class="question-container m-2" id="faq">
          <div class="question flex justify-between p-1 my-1">
            <h3>question content</h3>
            <i class="uil uil-angle-right-b"></i>
          </div>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium enim nam at dicta magnam. Facere dolorum eum mollitia,
              delectus excepturi necessitatibus quaerat, ipsum culpa autem iusto
              accusantium ipsa. Quos, dolores!
            </p>
          </div>
        </div>
        <!-- -------------- QUESTION FOUR -------------- -->
        <div class="question-container m-2" id="faq">
          <div class="question flex justify-between p-1 my-1">
            <h3>question content</h3>
            <i class="uil uil-angle-right-b"></i>
          </div>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium enim nam at dicta magnam. Facere dolorum eum mollitia,
              delectus excepturi necessitatibus quaerat, ipsum culpa autem iusto
              accusantium ipsa. Quos, dolores!
            </p>
          </div>
        </div>
        <!-- -------------- QUESTION FIVE -------------- -->
        <div class="question-container m-2" id="faq">
          <div class="question flex justify-between p-1 my-1">
            <h3>question content</h3>
            <i class="uil uil-angle-right-b"></i>
          </div>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium enim nam at dicta magnam. Facere dolorum eum mollitia,
              delectus excepturi necessitatibus quaerat, ipsum culpa autem iusto
              accusantium ipsa. Quos, dolores!
            </p>
          </div>
        </div>
        <!-- -------------- QUESTION six -------------- -->
        <div class="question-container m-2" id="faq">
          <div class="question flex justify-between p-1 my-1">
            <h3>question content</h3>
            <i class="uil uil-angle-right-b"></i>
          </div>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium enim nam at dicta magnam. Facere dolorum eum mollitia,
              delectus excepturi necessitatibus quaerat, ipsum culpa autem iusto
              accusantium ipsa. Quos, dolores!
            </p>
          </div>
        </div>
        <button class="my-2 main-btn-stretched">commancer</button>
      </div>
    </section>
    <footer class="w-screen p-gap">
        <div class="cantainer flex align-center justify-around mb-flex-col">
          <div class="flex-col">
            <a class="my-1" href="#">Mentions legales</a>
            <a class="my-1" href="#">Termes et conditions</a>
            <a class="my-1" href="#">Politique de condidentialite</a>
          </div>
          <div>
            <h1>Social media</h1>
          <div class="social-media flex justify-center align-center my-2">
            <a class="mx-2" target="_blank" href="https://www.instagram.com/amaneapp/?hl=fr"><i class="uil uil-instagram"></i></a>
            <a class="mx-2" target="_blank" href="https://www.youtube.com/channel/UCmyYDJEgksj20XMi1eRBGjg/featured"><i class="uil uil-youtube"></i></a>
            <a class="mx-2" target="_blank" href="mailto:amaneapp.contact@gmail.com"><i class="uil uil-envelope-alt"></i></a>
      </div>
          </div>
        </div>
        <div class="copyright">
          <p>
            Si vous êtes en crise ou si toute autre personne est <span style="color: rgb(62, 9, 9);">en danger</span>, n'utilisez pas ce site. appel la police (19) qui peuvent vous fournir une aide immédiate.
          </p>
          <p class="py-2 cpy">© 2022 Tous les droits sont réservés</p>
        </div>
    </footer>
@endsection