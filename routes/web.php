<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

//! route per andare alla home page
Route::get('/', [PublicController::class, 'goHome'])->name('homePage');

//! route per andare alla pagina chi siamo
Route::get('/chi-siamo', [PublicController::class, 'goAboutUs'])->name('aboutUsPage');

//! route per andare ai servizi
Route::get('/servizi', [PublicController::class, 'goService'])->name('servicesPage');

//!route per andare alla pagina dettaglio dei singoli servizi
Route::get('/dettagli-del-servizio/{id}', [PublicController::class, 'goServiceDetail'])->name('detailPage');