<form id="form" name="form" action="#cadastro" method="POST">
    <div class="form-container">
        <label for="cpf" class="label">CPF do Tutor:</label>
        <input name="cpf" type="text" id="cpf" />
      </div>
    
    <div class="form-container">
      <label for="nome_tutor" class="label">Nome do Tutor:</label>
      <input type="text" class="input" name="nome_tutor" />
    </div>

    <div class="form-container">
      <label for="telefone" class="label">Telefone:</label>
      <input type="text" class="input" name="telefone"/>
    </div>

    <div class="form-container radio">
      <label for="tipo" class="label-radio">Tipo:</label>

      <div id="radio">
        <div class="felino">
          <input
            type="radio"
            name="tipo"
            id="felino"
            class="input-radio"
            checked
          />
          <label for="felino" class="label-radio">Felino</label>
        </div>

        <div class="canino">
          <input
            type="radio"
            name="tipo"
            id="canino"
            class="input-radio"
          />
          <label for="canino" class="label">Canino</label>
        </div>
      </div>
    </div>

    <div class="form-container">
      <label for="nome" class="label">Nome do Pet:</label>
      <input type="text" class="input" name="nome" />
    </div>

    <div class="form-container">
      <label for="raca" class="label">Raça do Pet:</label>
      <input type="text" class="input" name="raca"/>
    </div>

    <div class="form-container">
      <label for="idade" class="label">Idade do Pet:</label>
      <input type="text" class="input" name="idade" />
    </div>

    <div class="submit-container">
      <div class="button-submit-form">
        <button id="cadastrar" type="submit">{{$option}}</button>
        <button id="cancelar" type="reset"><a href="{{route('site.index')}}">Cancelar</a></button>
      </div>
    </div>
  </form>