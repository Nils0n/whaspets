<nav class="container-nav">
    <!-- menu -->
    <div class="menu">
    <ul class="grid submit-container">
        <div class="logo-desk">
        <!-- <span id=""></span> -->
        </div>

        <li><a class="title" href="{{route('site.index')}}">Início</a></li>
        <li><a class="title" href="{{route('site.cadastropet')}}">Cadastrar Pet</a></li>
        <li>
        <a class="title" href="{{route('site.cadastroservico')}}"
            >Agendar Banho/Tosa</a
        >
        </li>
        <li><a class="title" href="{{route('site.servicos')}}">Ver Agendamentos</a></li>
        <li>
        <a class="title" href="{{route('site.pets')}}">Ver Pets Cadastrados</a>
        </li>
    </ul>
    </div>
    <!-- /menu -->
    <div class="toggle icon-menu"></div>
    <div class="toggle icon-close"></div>
</nav>