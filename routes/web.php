<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssatController;

Route::get('/', [IssatController::class, 'homeIssat'])->name('home');

Route::get('/collaboration', [IssatController::class, 'issatCollab'])->name('home.collab');
Route::get('/collaboration/formation', [IssatController::class, 'issatCollabPerso'])->name('collab.formPerso');
Route::post('/collaboration/formation', [IssatController::class, 'formPerso'])->name('training.store');

Route::get('/collaboration/recherche', [IssatController::class, 'issatCollabRech'])->name('collab.formconjointe');
Route::post('/collaboration/recherche', [IssatController::class, 'formconjointe'])->name('formConjointe.store');

Route::get('/collaboration/promotion', [IssatController::class, 'issatCollabPromo'])->name('collab.promotion');
Route::post('/collaboration/promotion', [IssatController::class, 'promotionEnterStore'])->name('promotion.store');

Route::get('/home/entreprise', [IssatController::class, 'issatEnter'])->name('home.entreprise');
Route::get('/entreprise/all', [IssatController::class, 'issatEnterAll'])->name('entre.all');
Route::get('/entreprise/evaluation', [IssatController::class, 'issatEnterEva'])->name('entre.collab');
Route::get('/entreprise/order', [IssatController::class, 'issatEnterOrder'])->name('entre.order');
Route::post('/entreprise/order/update', [IssatController::class, 'issatEnterOrderUpdate'])->name('orders.update');

Route::get('/home/messagerie', [IssatController::class, 'issatMessage'])->name('home.message');

Route::get('/home/publication', [IssatController::class, 'issatMesPub'])->name('home.pub');
Route::post('/publication/store', [IssatController::class, 'pubStore'])->name('pub.store');
Route::delete('/publication/delete/{publication}', [IssatController::class, 'pubDelete'])->name('pub.delete');
Route::get('/publication/all', [IssatController::class, 'issatAllPub'])->name('allPublication');

Route::get('/home/etudiantsmeilleurs', [IssatController::class, 'issatBestStudent'])->name('home.bestStudent');
Route::get('/etudiants/create', [IssatController::class, 'addStudent'])->name('students.create');
Route::post('/etudiants/store', [IssatController::class, 'storeStudent'])->name('students.store');
Route::get('/etudiants/edit/{student}', [IssatController::class, 'editStudent'])->name('students.edit');
Route::post('/etudiants/update/{student}', [IssatController::class, 'updateStudent'])->name('students.update');
Route::get('/etudiants/delete/{student}', [IssatController::class, 'destroyStudent'])->name('students.destroy');

Route::get('/home/a_vendre', [IssatController::class, 'AVendre'])->name('home.vendre');
Route::post('/a_vendre/store', [IssatController::class, 'AVendreStore'])->name('articles.store');
Route::delete('/a_vendre/delete/{article}', [IssatController::class, 'AVendreDelete'])->name('articles.delete');

Route::get('/home/comptabilite', [IssatController::class, 'issatCompta'])->name('home.compt');
