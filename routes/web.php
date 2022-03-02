<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsVisitor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'admin','middleware'=>'App\Http\Middleware\IsUser'], function(){
    Route::get('/getAddAcademicBackgroundForm',[SkillController::class,'getAddAcademicBackgroundForm'])
        ->name('getAddAcademicBackgroundForm');
    Route::post('/addAcademicBackground',[SkillController::class,'addAcademicBackground'])
        ->name('addAcademicBackground');
    Route::get('/getEditAcademicBackground/{id}',[SkillController::class,'getEditAcademicBackgroundForm'])
        ->name('getEditAcademicBackgroundForm')->where(['id'=>'[0-9]+']);
    Route::post('/editAcademicBackground/{id}',[SkillController::class,'editAcademicBackground'])
        ->name('editAcademicBackground')->where(['id'=>'[0-9]+']);
    Route::get('/getAddLanguageForm',[SkillController::class,'getAddLanguageForm'])
        ->name('getAddLanguageForm');
    Route::post('/addLanguage',[SkillController::class,'addLanguage'])->name('addLanguage');
    Route::get('/getEditLanguageForm/{id}',[SkillController::class,'getEditLanguageForm'])
        ->name('getEditLanguageForm')
        ->where(['id'=>'[0-9]+']);
    Route::post('/editLanguage/{id}',[SkillController::class,'editLanguage'])->name('editLanguage')
        ->where(['id'=>'[0-9]+']);
    Route::get('/getAddHobbyForm',[SkillController::class,'getAddHobbyForm'])
        ->name('getAddHobbyForm');
    Route::post('/addHobby',[SkillController::class,'addHobby'])->name('addHobby');
    Route::get('/getAddSoftwareForm',[SkillController::class,'getAddSoftwareForm'])
        ->name('getAddSoftwareForm');
    Route::post('/addSoftware',[SkillController::class,'addSoftware'])->name('addSoftware');
    Route::get('/viewArticle/{id}',[ArticleController::class,'viewArticle'])
        ->name('viewArticle')->where(['id'=>'[0-9]+']);
    Route::post('/createRemark/{id}',[ArticleController::class,'createRemark'])->name('createRemark')
        ->where(['id'=>'[0-9]+']);
    Route::get('/allArticle',[ArticleController::class,'allArticle'])->name('allArticle');
    Route::view('/createArticle','articles.create_articles')->name('create_article');
    Route::post('/createArticle',[ArticleController::class,'createArticle'])->name('createArticle');
    Route::get('/homePage',[UserController::class,'homePage'])->name('homePage');
    Route::get('/settings',[UserController::class,'viewSetting'])->name('admin.settings');
    Route::get('/comments',[ArticleController::class,'viewComments'])->name('allComment');
    Route::get('/updateComments/{id}',[ArticleController::class,'updatedComment'])
        ->name('updateComment')->where(['id'=>'[0-9]+']);
    Route::get('/getEditProfile',[UserController::class,'getEditProfile'])->name('getEditProfile');
    Route::post('/editProfile',[UserController::class,'editProfile'])->name('editProfile');
    Route::get('/getUpdateUserData',[UserController::class,'getUpdateUserData'])
        ->name('getUpdateUserData');
    Route::post('/updateUserData',[UserController::class,'updateUserData'])->name('updateUserData');
});

Route::group(['prefix'=>'visitor','middleware'=>'App\Http\Middleware\IsVisitor'], function(){
    Route::get('/viewArticle/{id}',[VisitorController::class,'viewArticle'])
        ->name('visitor.viewArticle')->where(['id'=>'[0-9]+']);
    Route::get('/allArticle',[VisitorController::class,'allArticle'])->name('visitor.allArticle');
    Route::get('/homePage',[VisitorController::class,'homePage'])->name('visitor.homePages');
    Route::view('/contact','visitors.contact')->name('visitor.contact');
    Route::post('/createRemark/{id}',[VisitorController::class,'createRemark'])->name('visitor.createRemark')
        ->where(['id'=>'[0-9]+']);
});

Route::view('/layouts','layouts.main_layouts');

Route::view('/visitorLayouts','layouts.visitorLayouts');


Route::view('/index','index');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
