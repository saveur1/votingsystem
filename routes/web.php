<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionsController;
use App\Http\Controllers\ManagersController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\UserController;
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
Route::get('/register', [ UserController::class, "create" ])->name('register');
Route::post('/register', [ UserController::class, "store" ]);

Route::get('/login', [ UserController::class, "login" ]);

// dashboard home
Route::get('/dashboard', [ UserController::class,"index" ]);

// dashboard candidates
Route::get('/dashboard/candidates', [ CandidateController::class,"index" ]);
Route::get('/dashboard/candidate/new', [ CandidateController::class,"create" ]);
Route::post('/dashboard/candidate/new', [ CandidateController::class,"store" ]);
Route::patch('/dashboard/candidates/{user_id}', [ CandidateController::class,"update" ]);
Route::delete('/dashboard/candidates/{user_id}', [ CandidateController::class,"destroy" ]);
Route::get('/dashboard/candidate/{user_id}/edit', [ CandidateController::class,"edit" ]);

// dashboard Management Team
Route::get('/dashboard/managers', [ ManagersController::class,"index" ]);
Route::get('/dashboard/manager/new', [ ManagersController::class,"create" ]);
Route::post('/dashboard/manager/new', [ ManagersController::class,"store" ]);
Route::patch('/dashboard/managers/{user_id}', [ ManagersController::class,"update" ]);
Route::delete('/dashboard/managers/{user_id}', [ ManagersController::class,"destroy" ]);
Route::get('/dashboard/manager/{user_id}/edit', [ ManagersController::class,"edit" ]);

// dashboard Voters
Route::get('/dashboard/voters', [ VotersController::class,"index" ]);
Route::get('/dashboard/voter/new', [ VotersController::class,"create" ]);
Route::post('/dashboard/voter/new', [ VotersController::class,"store" ]);
Route::post('/dashboard/voters/import', [ VotersController::class,"import" ]);
Route::patch('/dashboard/voters/{user_id}', [ VotersController::class,"update" ]);
Route::delete('/dashboard/voters/{user_id}', [ VotersController::class,"destroy" ]);
Route::get('/dashboard/voter/{user_id}/edit', [ VotersController::class,"edit" ]);

// dashboard Election
Route::get('/dashboard/elections', [ ElectionsController::class,"index" ]);
Route::get('/dashboard/election/new', [ ElectionsController::class,"create" ]);
Route::post('/dashboard/election/new', [ ElectionsController::class,"store" ]);
Route::patch('/dashboard/elections/{election_id}', [ ElectionsController::class,"update" ]);
Route::delete('/dashboard/elections/{election_id}', [ ElectionsController::class,"destroy" ]);
Route::get('/dashboard/election/{election_id}/edit', [ ElectionsController::class,"edit" ]);

// dashbaord Parties
Route::get('/dashboard/parties', [ PartyController::class,"index" ]);
Route::get('/dashboard/party/new', [ PartyController::class,"create" ]);
Route::post('/dashboard/party/new', [ PartyController::class,"store" ]);
Route::patch('/dashboard/parties/{party_id}', [ PartyController::class,"update" ]);
Route::delete('/dashboard/parties/{party_id}', [ PartyController::class,"destroy" ]);
Route::get('/dashboard/party/{party_id}/edit', [ PartyController::class,"edit" ]);

// Voters Dashbaord
Route::get('/voters/elections', [ UserController::class,"election" ]);
Route::get('/voters/voting', [ UserController::class,"voting" ]);
Route::get('/voters/{user_id}', [ UserController::class,"show" ]);
