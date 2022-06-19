<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\Controller;
use App\Http\Controllers\backend;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['App\Http\Controllers\frontend\IndexController','index']);
Route::get('/about',['App\Http\Controllers\frontend\AboutController','about']);
Route::get('/contact',['App\Http\Controllers\frontend\ContactController','contact']);
Route::get('/projects',['App\Http\Controllers\frontend\ProjectsController','projects']);

Route::get('/admin/login',['App\Http\Controllers\frontend\LoginController','index']);
// Route::get('/dashboard',['App\Http\Controllers\frontend\LoginController','index']);


Route::get('admin/index',['App\Http\Controllers\backend\Indexcontroller','index']);

Route::get('/form',['App\Http\Controllers\backend\Formcontroller','create']);
Route::get('/viewprojects',['App\Http\Controllers\backend\Formcontroller','viewprojects']);
Route::get('{id}/edit',['App\Http\Controllers\backend\Formcontroller','edit']);
Route::get('{id}/activestatus',['App\Http\Controllers\backend\Formcontroller','activestatus']);
Route::get('{id}/delete',['App\Http\Controllers\backend\Formcontroller','delete']);
Route::get('{id}/view',['App\Http\Controllers\backend\Formcontroller','view']);
Route::get('/recycle_bin',['App\Http\Controllers\backend\Formcontroller','recyclebin']);
Route::get('{id}/restore',['App\Http\Controllers\backend\Formcontroller','restore']);
Route::get('{id}/forcedelete',['App\Http\Controllers\backend\Formcontroller','forcedelete']);
Route::post('{id}/position_update',['App\Http\Controllers\backend\Formcontroller','position_update']);
Route::post('update/{id}',['App\Http\Controllers\backend\Formcontroller','update']);
Route::post('/create',['App\Http\Controllers\backend\Formcontroller','store']);

Route::get('/create_member',['App\Http\Controllers\backend\Ourteamcontroller','create']);
Route::get('{id}/edit_member',['App\Http\Controllers\backend\Ourteamcontroller','edit']);
Route::get('/view_team_members',['App\Http\Controllers\backend\Ourteamcontroller','viewmembers']);
Route::get('{id}/view_member',['App\Http\Controllers\backend\Ourteamcontroller','view']);
Route::get('{id}/delete_member',['App\Http\Controllers\backend\Ourteamcontroller','delete']);
Route::get('/recycle_bin_members',['App\Http\Controllers\backend\Ourteamcontroller','recyclebin']);
Route::get('{id}/activestatus_member',['App\Http\Controllers\backend\Ourteamcontroller','activestatus']);
Route::get('{id}/restore_member',['App\Http\Controllers\backend\Ourteamcontroller','restore']);
Route::get('{id}/forcedelete_member',['App\Http\Controllers\backend\Ourteamcontroller','forcedelete']);
Route::post('/store_member',['App\Http\Controllers\backend\Ourteamcontroller','store']);
Route::post('{id}/position_update_member',['App\Http\Controllers\backend\Ourteamcontroller','position_update']);
Route::post('{id}/update_member',['App\Http\Controllers\backend\Ourteamcontroller','update']);

Route::get('/create_service',['App\Http\Controllers\backend\ServiceController','create']);
Route::get('{id}/edit_service',['App\Http\Controllers\backend\ServiceController','edit']);
Route::get('/view_services',['App\Http\Controllers\backend\ServiceController','display']);
Route::get('{id}/view_service',['App\Http\Controllers\backend\ServiceController','view']);
Route::get('{id}/delete_service',['App\Http\Controllers\backend\ServiceController','delete']);
Route::get('/recycle_bin_service',['App\Http\Controllers\backend\ServiceController','recyclebin']);
Route::get('{id}/activestatus_service',['App\Http\Controllers\backend\ServiceController','activestatus']);
Route::get('{id}/restore_service',['App\Http\Controllers\backend\ServiceController','restore']);
Route::get('{id}/forcedelete_service',['App\Http\Controllers\backend\ServiceController','forcedelete']);
Route::post('/store_service',['App\Http\Controllers\backend\ServiceController','store']);
Route::post('{id}/position_update_service',['App\Http\Controllers\backend\ServiceController','position_update']);
Route::post('update_service/{id}',['App\Http\Controllers\backend\ServiceController','update']);

Route::get('/create_testimony',['App\Http\Controllers\backend\TestimonyController','create']);
Route::get('{id}/edit_testimony',['App\Http\Controllers\backend\TestimonyController','edit']);
Route::get('/view_testimonys',['App\Http\Controllers\backend\TestimonyController','display']);
Route::get('{id}/view_testimony',['App\Http\Controllers\backend\TestimonyController','view']);
Route::get('{id}/delete_testimony',['App\Http\Controllers\backend\TestimonyController','delete']);
Route::get('/recycle_bin_testimony',['App\Http\Controllers\backend\TestimonyController','recyclebin']);
Route::get('{id}/activestatus_testimony',['App\Http\Controllers\backend\TestimonyController','activestatus']);
Route::get('{id}/restore_testimony',['App\Http\Controllers\backend\TestimonyController','restore']);
Route::get('{id}/forcedelete_testimony',['App\Http\Controllers\backend\TestimonyController','forcedelete']);
Route::post('/store_testimony',['App\Http\Controllers\backend\TestimonyController','store']);
Route::post('{id}/position_update_testimony',['App\Http\Controllers\backend\TestimonyController','position_update']);
Route::post('update_testimony/{id}',['App\Http\Controllers\backend\TestimonyController','update']);


Route::get('/create_skilldescription',['App\Http\Controllers\backend\SkilldescriptionController','create']);
Route::post('/store_skilldescription',['App\Http\Controllers\backend\SkilldescriptionController','store']);

Route::get('/create_skillname',['App\Http\Controllers\backend\SkillnameController','create']);
Route::get('{id}/edit_skillname',['App\Http\Controllers\backend\SkillnameController','edit']);
Route::get('/view_skillnames',['App\Http\Controllers\backend\SkillnameController','display']);
Route::get('{id}/view_skillname',['App\Http\Controllers\backend\SkillnameController','view']);
Route::get('{id}/delete_skillname',['App\Http\Controllers\backend\SkillnameController','delete']);
Route::get('/recycle_bin_skillname',['App\Http\Controllers\backend\SkillnameController','recyclebin']);
Route::get('{id}/activestatus_skillname',['App\Http\Controllers\backend\SkillnameController','activestatus']);
Route::get('{id}/restore_skillname',['App\Http\Controllers\backend\SkillnameController','restore']);
Route::get('{id}/forcedelete_skillname',['App\Http\Controllers\backend\SkillnameController','forcedelete']);
Route::post('/store_skillname',['App\Http\Controllers\backend\SkillnameController','store']);
Route::post('{id}/position_update_skillname',['App\Http\Controllers\backend\SkillnameController','position_update']);
Route::post('{id}/update_skillname',['App\Http\Controllers\backend\SkillnameController','update']);

Route::get('/create_aboutus',['App\Http\Controllers\backend\AboutusController','create']);
Route::post('/store_aboutus',['App\Http\Controllers\backend\AboutusController','store']);


Route::get('/create_contactdetail',['App\Http\Controllers\backend\ContactdetailController','create']);
Route::post('/store_contactdetail',['App\Http\Controllers\backend\ContactdetailController','store']);

Route::post('/store_contact',['App\Http\Controllers\backend\ContactusController','store']);
Route::get('/view_people_to_contact',['App\Http\Controllers\backend\ContactusController','display']);
Route::get('{id}/restore_people_to_contact',['App\Http\Controllers\backend\ContactusController','restore']);
Route::get('{id}/forcedelete_people_to_contact',['App\Http\Controllers\backend\ContactusController','forcedelete']);
Route::get('{id}/delete_people_to_contact',['App\Http\Controllers\backend\ContactusController','delete']);
Route::get('/people_to_contact_recyclebin',['App\Http\Controllers\backend\ContactusController','recyclebin']);

Route::get('/file-resize', ['App\Http\Controllers\backend\ResizeController', 'index']);
Route::post('/resize-file', ['App\Http\Controllers\backend\ResizeController', 'resizeImage'])->name('resizeImage');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home',['App\Http\Controllers\frontend\IndexController','index']);
