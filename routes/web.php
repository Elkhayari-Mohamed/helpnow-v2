<?php

use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\WalletsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\SpecialitiesController;
use App\Http\Controllers\DoctorSpecialitieController;
use App\Http\Controllers\OrdonnancesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultationsController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\{Patients_listController};

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

Route::get('/', function () {
    return view('doctors.index');
});
Route::get('/', function () {
    return redirect('patients/index');
});
Route::get('/live/{link}',[HomeController::class, 'live'])->name('live');
Route::get('/balance/{patient_id?}',      [WalletsController::class, 'show'])->name('balance');

//Route::get('/index', [DoctorsController::class, 'index'])->name('doctorsIndex');
    Route::prefix('doctors')->middleware([])->group(function () {
    
    Route::get('/',                      [DoctorsController::class, 'index'])->name('doctorsIndex');
    Route::get('/index',                 [DoctorsController::class, 'index'])->name('doctorsIndex');
    Route::get('/create',                [DoctorsController::class, 'create'])->name('doctorsCreate');
    Route::get('/profil/edit',           [DoctorsController::class, 'edit'])->name('doctorsProfils');
    //Route::get('/profil/edit', function  () {$results = DB::select('select * from doctors where user_id= (SELECT id from users where id=Auth::id()'); return view('doctors/edit', ['results' => $results]);});


    Route::post('/myprofile',            [DoctorsController::class, 'store'])->name('doctorsComplete_profile');
    Route::get('/myprofile',             [DoctorsController::class, 'store'])->name('doctorsComplete_profile');
    Route::post('/update',               [DoctorsController::class, 'update'])->name('doctors.update');
    Route::get('/overview',              [DoctorsController::class, 'show'])->name('doctorsShow');
    Route::get('/career',                [DoctorsController::class, 'career'])->name('doctorsCareer');
    Route::get('/messages',              [DoctorsController::class, 'messages'])->name('doctorsMsg');
    Route::get('/send',                  [DoctorsController::class, 'send'])->name('doctorsSend');
    Route::get('/reply',                 [DoctorsController::class, 'reply'])->name('doctorsReply');
    Route::get('/chat/private',          [DoctorsController::class, 'private'])->name('doctorsPrivate');
    Route::get('/chat/drawer',           [DoctorsController::class, 'drawer'])->name('doctorsDrawer');
    Route::get('/events',              [DoctorsController::class, 'events'])->name('eventsCalendar');
    Route::get('/calendar',              [DoctorsController::class, 'calendar'])->name('doctorsCalendar');
    Route::get('/patient_info/{id?}',     [DoctorsController::class, 'patient_info'])->name('doctorsPatient_info');
    Route::get('/ordonnance/{id}/{status?}',              [OrdonnancesController::class, 'create'])->name('doctorsRapport');
    Route::post('/rapports',              [OrdonnancesController::class, 'store'])->name('doctorsRapport');
    Route::get('/Patients_list', [DoctorsController::class, 'Patients_list'])->name('doctorsPatients_list');
   //Route::get('/doctors/add_to_list',    [Patients_listController::class, 'Patients_list'])->name('Patients_list');
    Route::post('/Patients_list',[DoctorsController::class, 'store'])->name('doctorsPatients_list');
    Route::post('/Patients_list/{cons_id}',[ConsultationsController::class, 'update'])->name('status_update');
    Route::get('/Patients_list/{cons_id}/{status}',[ConsultationsController::class, 'update_2'])->name('status_update');
    Route::get('/consultation',[ConsultationsController::class, 'create'])->name('doctorsConsultation');
    Route::post('/consultation',[ConsultationsController::class, 'store'])->name('doctorsConsultation.save');





});

Route::prefix('patients')->middleware([])->group(function () {
    Route::get('/',            [PatientsController::class, 'index'])->name('patientsIndex');
    Route::get('/index',       [PatientsController::class, 'index'])->name('patientsIndex');
    Route::get('/create',      [PatientsController::class, 'create'])->name('patientsCreate');
    Route::get('/profil/edit', [PatientsController::class, 'edit'])->name('patientsProfils');
    Route::post('/profil/edit', [PatientsController::class, 'edit'])->name('patientsProfils');
    Route::post('/update',      [PatientsController::class, 'update'])->name('patients.update');
    Route::get('/specialities',    [SpecialitiesController::class, 'show'])->name('Specialities.Show');
    Route::get('/overview',    [PatientsController::class, 'show'])->name('patientsShow');
    Route::get('/career',      [PatientsController::class, 'career'])->name('patientsCareer');
    Route::get('/messages',    [PatientsController::class, 'messages'])->name('patientsMsg');
    Route::get('/send',        [PatientsController::class, 'send'])->name('patientsSend');
    Route::get('/reply',       [PatientsController::class, 'reply'])->name('patientsReply');
    Route::get('/chat/private',[PatientsController::class, 'private'])->name('patientsPrivate');
    Route::get('/chat/drawer', [PatientsController::class, 'drawer'])->name('patientsDrawer');
    Route::get('/events',      [PatientsController::class, 'events'])->name('eventsCalendar');
    Route::get('/calendar',    [PatientsController::class, 'calendar'])->name('patientsCalendar');
    Route::get('/team',        [PatientsController::class, 'team'])->name('patientsTeam');
    Route::get('/bills',       [PatientsController::class, 'bill'])->name('patientsBills');
    Route::get('/ourdoctors',  [PatientsController::class, 'ourdoctors'])->name('patientsOurdoctors');
    Route::post('/ourdoctors',  [PatientsController::class, 'ourdoctors'])->name('patientsOurdoctors');
    Route::get('/doctorsbyspecialitie/{name?}',  [PatientsController::class, 'doctorsbyspecialitie'])->name('doctors.specialitie');
    Route::get('/doctorcontact/{id}',[PatientsController::class, 'doctorcontact'])->name('patientsDoctorcontact');
    Route::post('/myprofile',    [PatientsController::class, 'store'])->name('patientsComplete_profile');
    Route::get('/myprofile',     [PatientsController::class, 'store'])->name('patientsComplete_profile');
    Route::get('/consultation/{id}',[ConsultationsController::class, 'create'])->name('patientsConsultation');
    Route::post('/consultation/{id}',[ConsultationsController::class, 'store'])->name('patientsConsultation.save');
    Route::get('/consult/show/{consultation_id}/{payed?}',[ConsultationsController::class, 'show'])->name('ConsultShow');
    Route::get('/ordonnance/{id}',[PatientsController::class, 'ordonnance'])->name('patientsOrdonnance');
    //Route::post('/save',     [ConsultationsController::class, 'store'])->name('patientsSave');
    



});

require __DIR__ . '/auth.php';
