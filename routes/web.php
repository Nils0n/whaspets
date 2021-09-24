<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\TemplateController;
use App\Http\Controllers\PetController;



Route::view('/' , 'site.Home')->name('site.index');

Route::get('/cadastropet' , [PetController::class, 'index'])->name('site.cadastropet');

Route::view('/cadastroservico' , 'site.CadastroServico')->name('site.cadastroservico');

Route::view('/pets' , 'site.PetsCadastrado')->name('site.pets');

Route::view('/servicos' , 'site.Servicos')->name('site.servicos');

