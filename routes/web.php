<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionsController;
use App\Http\Controllers\ManagersController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoterCandidateController;
use App\Http\Controllers\VotersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/register', [ UserController::class, "create" ])->name('register');
Route::post('/register', [ UserController::class, "store" ]);

Route::get('/login', [ UserController::class, "login" ])->name('login');
Route::post('/login', [ UserController::class, "checkLogin" ]);
Route::get('/logout', [ UserController::class, "logout" ]);

// dashboard home
Route::get('/dashboard', [ UserController::class,"index" ])->middleware(["auth","admin.only"]);

// dashboard candidates
Route::get('/dashboard/candidates', [ CandidateController::class,"index" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/candidate/new', [ CandidateController::class,"create" ])->middleware(["auth","admin.only"]);
Route::post('/dashboard/candidate/new', [ CandidateController::class,"store" ])->middleware(["auth","admin.only"]);
Route::patch('/dashboard/candidates/{user_id}', [ CandidateController::class,"update" ])->middleware(["auth","admin.only"]);
Route::delete('/dashboard/candidates/{user_id}', [ CandidateController::class,"destroy" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/candidate/{user_id}/edit', [ CandidateController::class,"edit" ])->middleware(["auth","admin.only"]);

// dashboard Management Team
Route::get('/dashboard/managers', [ ManagersController::class,"index" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/manager/new', [ ManagersController::class,"create" ])->middleware(["auth","admin.only"]);
Route::post('/dashboard/manager/new', [ ManagersController::class,"store" ])->middleware(["auth","admin.only"]);
Route::patch('/dashboard/managers/{user_id}', [ ManagersController::class,"update" ])->middleware(["auth","admin.only"]);
Route::delete('/dashboard/managers/{user_id}', [ ManagersController::class,"destroy" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/manager/{user_id}/edit', [ ManagersController::class,"edit" ])->middleware(["auth","admin.only"]);

// dashboard Voters
Route::get('/dashboard/voters', [ VotersController::class,"index" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/voter/new', [ VotersController::class,"create" ])->middleware(["auth","admin.only"]);
Route::post('/dashboard/voter/new', [ VotersController::class,"store" ])->middleware(["auth","admin.only"]);
Route::post('/dashboard/voters/import', [ VotersController::class,"import" ])->middleware(["auth","admin.only"]);
Route::patch('/dashboard/voters/{user_id}', [ VotersController::class,"update" ])->middleware(["auth","admin.only"]);
Route::delete('/dashboard/voters/{user_id}', [ VotersController::class,"destroy" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/voter/{user_id}/edit', [ VotersController::class,"edit" ])->middleware(["auth","admin.only"]);

// dashboard Election
Route::get('/dashboard/elections', [ ElectionsController::class,"index" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/election/new', [ ElectionsController::class,"create" ])->middleware(["auth","admin.only"]);
Route::post('/dashboard/election/new', [ ElectionsController::class,"store" ])->middleware(["auth","admin.only"]);
Route::patch('/dashboard/elections/{election_id}', [ ElectionsController::class,"update" ])->middleware(["auth","admin.only"]);
Route::delete('/dashboard/elections/{election_id}', [ ElectionsController::class,"destroy" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/election/{election_id}/edit', [ ElectionsController::class,"edit" ])->middleware(["auth","admin.only"]);

// dashbaord Parties
Route::get('/dashboard/parties', [ PartyController::class,"index" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/party/new', [ PartyController::class,"create" ])->middleware(["auth","admin.only"]);
Route::post('/dashboard/party/new', [ PartyController::class,"store" ])->middleware(["auth","admin.only"]);
Route::patch('/dashboard/parties/{party_id}', [ PartyController::class,"update" ])->middleware(["auth","admin.only"]);
Route::delete('/dashboard/parties/{party_id}', [ PartyController::class,"destroy" ])->middleware(["auth","admin.only"]);
Route::get('/dashboard/party/{party_id}/edit', [ PartyController::class,"edit" ])->middleware(["auth","admin.only"]);

// Voting Candidate
Route::get('/voters/voting', [ VoterCandidateController::class,"index" ])->middleware(["auth"]);
Route::post('/voters/voting', [ VoterCandidateController::class,"store" ])->middleware(["auth"]);

// Voters Dashbaord
Route::get('/voters/elections', [ UserController::class,"election" ])->middleware(["auth"]);
Route::get('/voters', [ UserController::class,"show" ])->middleware(["auth"]);
Route::get('/voters/edit_profile', [ UserController::class,"profile" ])->middleware(["auth"]);
Route::patch('/voters/edit_profile', [ UserController::class,"update" ])->middleware(["auth"]);
