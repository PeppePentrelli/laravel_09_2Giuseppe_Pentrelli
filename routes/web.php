<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkinController;
use App\Http\Controllers\BundleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\CommunityController;

Route::get('/', [PublicController::class, 'HomeFunction'])->name('Home');

Route::get('RegolamentoContest', [PublicController::class, 'paginaRegolamentoFunction'])->name('paginaRegolamento');

Route::get('Armi', [WeaponController::class , 'WeaponFunction'] )->name('paginaArmi');

Route::get('DettaglioArmi/{id}', [WeaponController::class , 'DetailsWeaponFunction'] )->name('paginaDettaglioArmi');



Route::get('Skin', [SkinController::class , 'SkinFunction'] )->name('paginaSkin');

Route::get('DettaglioSkin/{id}', [SkinController::class , 'DetailsSkinFunction'] )->name('paginaDettaglioSkin');



Route::get('Bundle', [BundleController::class , 'BundleFunction'] )->name('paginaBundle');





Route::post('welcome/send' , [PublicController::class,'send_email'])->name('send_email');


Route::get('Community', [CommunityController::class , 'CommunityFunction'] )->name('paginaCommunity');
Route::post('Community/send', [CommunityController::class, 'send_post'])->name('Community.send');
Route::post('/community/{id}/like', [CommunityController::class, 'add_like'])->name('Community.like');



Route::post('Community/comment/{id}', [CommunityController::class, 'add_comment'])->name('Community.comment');
Route::post('/community/comment/{id}/report', [CommunityController::class, 'reportFunction'])->name('Community.report');




Route::get('privacy' , [PublicController::class , 'privacyFunction'])->name('paginaPrivacy');

Route::get('ChiSiamo' , [PublicController::class , 'PaginaChiSiamoFunction'])->name('PaginaChiSiamo');


Route::get('Contest', [ContestController::class , 'paginaContestFunction'])->name('paginaContest');
Route::post('/contest', [ContestController::class, 'store'])->name('contest.store');

Route::get('Galleria', [ContestController::class , 'GalleriaFunction'])->name('paginaGalleria');
