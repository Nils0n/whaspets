@extends('site.layouts.template')
@section('content')

<h1> Cadastro de Serviço </h1>

<hr>

<div class="container">
    <form id="form" name="form" action="agendamentoservico.php" method="POST">
    <div class="form-container">
        <label for="id_pet" class="label">ID do Pet:</label>
        <input type="text" class="input" name="id_pet" />
    </div>

    <div class="form-container">
        <label for="dia" class="label">Dia:</label>
        <input name="dia" type="text" id="dia" />
    </div>

    <div class="form-container">
        <label for="hora" class="label">Hora:</label>
        <input type="text" class="input" name="hora"/>
    </div>

    <div class="form-container">
        <label for="servico" class="label">Serviço:</label>
        <input type="text" class="input" name="servico" />
    </div>


    <div class="submit-container">
        <div class="button-submit-form">
        <button id="cadastrar" type="submit">Cadastrar</button>
        <button id="cancelar" type="reset"><a href="index.html">Cancelar</a></button>
        </div>
    </div>
    </form>
</div>

@endsection