<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formsController;



Route::get('form1', [formsController::class , 'form1'])->name('form1');
Route::post('form1', [formsController::class , 'form1_data'])->name('form1_data');



Route::get('form2', [formsController::class , 'form2'])->name('form2');
Route::post('form2', [formsController::class , 'form2_data'])->name('form2_data');


Route::get('form3', [formsController::class , 'form3'])->name('form3');
Route::post('form3', [formsController::class , 'form3_data'])->name('form3_data');


Route::get('form4', [formsController::class , 'form4'])->name('form4');
Route::post('form4', [formsController::class , 'form4_data'])->name('form4_data');
