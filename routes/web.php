<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RecoveryCodeController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController;
use Laravel\Fortify\Http\Controllers\TwoFactorQrCodeController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\ApiTokenController;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Laravel\Jetstream\Jetstream;

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

// Public...
Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');
Route::get('/demos', 'App\Http\Controllers\DemosController@index')->name('demos');
Route::get('/docs', 'App\Http\Controllers\DocsController@index')->name('docs');
Route::get('/plans', 'App\Http\Controllers\PricingController@index')->name('pricing');
// Sales Hub
Route::get('/panier/{step?}', '\App\Http\Controllers\SalesHubController@router')->name('basket')->where('step', '[A-Za-z]+');
// XHR...
Route::middleware(['only.ajax'])->post('/ajax', '\App\Http\Controllers\XhrController@index')->name('ajax');
Route::middleware(['only.ajax'])->get('/ajax', function() { return abort(404); });
/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
|
| Here are the routes which need to be connected for granted access.
|
*/

// Tasks...
Route::resource('taches', \App\Http\Controllers\TasksController::class);

// Dashboard...
Route::middleware(['auth:sanctum', 'verified'])->get('/tableau-de-bord', 'App\Http\Controllers\DashboardController@index')->name('dashboard');


/*
 |--------------------------------------------------------------------------
 | Fortify & Jetstream custom routes
 |--------------------------------------------------------------------------
 |
 | Here are custom french routes.
 |
 */

$enableViews = config('fortify.views', true);

// Authentication...
if ($enableViews) {
    Route::get('/connexion', [AuthenticatedSessionController::class, 'create'])
        ->middleware(['guest'])
        ->name('login');
}

$limiter = config('fortify.limiters.login');

Route::post('/connexion', [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter([
        'guest',
        $limiter ? 'throttle:'.$limiter : null,
    ]));

Route::post('/déconnexion', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Password Reset...
if (Features::enabled(Features::resetPasswords())) {
    if ($enableViews) {
        Route::get('/mot-de-passe-oublie', [PasswordResetLinkController::class, 'create'])
            ->middleware(['guest'])
            ->name('password.request');

        Route::get('/réinitialiser-le-mot-de-passe/{token}', [NewPasswordController::class, 'create'])
            ->middleware(['guest'])
            ->name('password.reset');
    }

    Route::post('/mot-de-passe-oublie', [PasswordResetLinkController::class, 'store'])
        ->middleware(['guest'])
        ->name('password.email');

    Route::post('/réinitialiser-le-mot-de-passe', [NewPasswordController::class, 'store'])
        ->middleware(['guest'])
        ->name('password.update');
}

// Registration...
/*if (Features::enabled(Features::registration())) {
    if ($enableViews) {
        Route::get('/inscription', [RegisteredUserController::class, 'create'])
            ->middleware(['guest'])
            ->name('register');
    }

    Route::post('/inscription', [RegisteredUserController::class, 'store'])
        ->middleware(['guest']);
}*/

// Email Verification...
if (Features::enabled(Features::emailVerification())) {
    if ($enableViews) {
        Route::get('/email/vérification', [EmailVerificationPromptController::class, '__invoke'])
            ->middleware(['auth'])
            ->name('verification.notice');
    }

    Route::get('/email/vérification/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/vérification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');
}

// Profile Information...
if (Features::enabled(Features::updateProfileInformation())) {
    Route::put('/utilisateur/mon-profil', [ProfileInformationController::class, 'update'])
        ->middleware(['auth'])
        ->name('user-profile-information.update');
}

// Passwords...
if (Features::enabled(Features::updatePasswords())) {
    Route::put('/utilisateur/mot-de-passe', [PasswordController::class, 'update'])
        ->middleware(['auth'])
        ->name('user-password.update');
}

// Password Confirmation...
if ($enableViews) {
    Route::get('/utilisateur/confirmation-mot-de-passe', [ConfirmablePasswordController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirm');

    Route::get('/utilisateur/confirmation-mot-de-passe-status', [ConfirmedPasswordStatusController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirmation');
}

Route::post('/utilisateur/confirmation-mot-de-passe', [ConfirmablePasswordController::class, 'store'])
    ->middleware(['auth']);

// Two Factor Authentication...
if (Features::enabled(Features::twoFactorAuthentication())) {
    if ($enableViews) {
        Route::get('/deux-facteurs-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
            ->middleware(['guest'])
            ->name('deux-facteurs.login');
    }

    Route::post('/deux-facteurs-challenge', [TwoFactorAuthenticatedSessionController::class, 'store'])
        ->middleware(['guest']);

    $twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
        ? ['auth', 'password.confirm']
        : ['auth'];

    Route::post('/utilisateur/deux-facteurs-authentification', [TwoFactorAuthenticationController::class, 'store'])
        ->middleware($twoFactorMiddleware);

    Route::delete('/utilisateur/deux-facteurs-authentification', [TwoFactorAuthenticationController::class, 'destroy'])
        ->middleware($twoFactorMiddleware);

    Route::get('/utilisateur/deux-facteurs-qr-code', [TwoFactorQrCodeController::class, 'show'])
        ->middleware($twoFactorMiddleware);

    Route::get('/utilisateur/deux-facteurs-recuperation-des-codes', [RecoveryCodeController::class, 'index'])
        ->middleware($twoFactorMiddleware);

    Route::post('/utilisateur/deux-facteurs-recuperation-des-codes', [RecoveryCodeController::class, 'store'])
        ->middleware($twoFactorMiddleware);
}

// User & Profile...
Route::get('/utilisateur/mon-profil', [UserProfileController::class, 'show'])
    ->name('profile.show');

// API...
if (Jetstream::hasApiFeatures()) {
    Route::get('/utilisateur/clés-api', [ApiTokenController::class, 'index'])->name('api-tokens.index');
}

// Teams...
if (Jetstream::hasTeamFeatures()) {
    Route::get('/equipe/créer', [TeamController::class, 'create'])->name('teams.create');
    Route::get('/equipe/{team}', [TeamController::class, 'show'])->name('teams.show');
    Route::put('/equipe-courante', [CurrentTeamController::class, 'update'])->name('current-team.update');
}
