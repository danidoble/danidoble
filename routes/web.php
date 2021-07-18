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
use Laravel\Jetstream\Http\Controllers\Livewire\PrivacyPolicyController;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\TermsOfServiceController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Laravel\Jetstream\Http\Controllers\TeamInvitationController;
use Laravel\Jetstream\Jetstream;
use App\Http\Controllers;

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

Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {
    /**
     * Fortify
     */
    Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
        $enableViews = config('fortify.views', true);

        // Authentication...
        if ($enableViews) {
            Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware(['guest'])
                ->name('login');
        }

        $limiter = config('fortify.limiters.login');
        $twoFactorLimiter = config('fortify.limiters.two-factor');

        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->middleware(array_filter([
                'guest',
                $limiter ? 'throttle:' . $limiter : null,
            ]));

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');

        // Password Reset...
        if (Features::enabled(Features::resetPasswords())) {
            if ($enableViews) {
                Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                    ->middleware(['guest'])
                    ->name('password.request');

                Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                    ->middleware(['guest'])
                    ->name('password.reset');
            }

            Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware(['guest'])
                ->name('password.email');

            Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware(['guest'])
                ->name('password.update');
        }

        // Registration...
        if (Features::enabled(Features::registration())) {
            if ($enableViews) {
                Route::get('/register', [RegisteredUserController::class, 'create'])
                    ->middleware(['guest'])
                    ->name('register');
            }

            Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware(['guest']);
        }

        // Email Verification...
        if (Features::enabled(Features::emailVerification())) {
            if ($enableViews) {
                Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
                    ->middleware(['auth'])
                    ->name('verification.notice');
            }

            Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

            Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');
        }

        // Profile Information...
        if (Features::enabled(Features::updateProfileInformation())) {
            Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
                ->middleware(['auth'])
                ->name('user-profile-information.update');
        }

        // Passwords...
        if (Features::enabled(Features::updatePasswords())) {
            Route::put('/user/password', [PasswordController::class, 'update'])
                ->middleware(['auth'])
                ->name('user-password.update');
        }

        // Password Confirmation...
        if ($enableViews) {
            Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware(['auth'])
                ->name('password.confirm');
        }

        Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
            ->middleware(['auth'])
            ->name('password.confirmation');

        Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
            ->middleware(['auth']);

        // Two Factor Authentication...
        if (Features::enabled(Features::twoFactorAuthentication())) {
            if ($enableViews) {
                Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
                    ->middleware(['guest'])
                    ->name('two-factor.login');
            }

            Route::post('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'store'])
                ->middleware(array_filter([
                    'guest',
                    $twoFactorLimiter ? 'throttle:' . $twoFactorLimiter : null,
                ]));

            $twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
                ? ['auth', 'password.confirm']
                : ['auth'];

            Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
                ->middleware($twoFactorMiddleware);

            Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
                ->middleware($twoFactorMiddleware);

            Route::get('/user/two-factor-qr-code', [TwoFactorQrCodeController::class, 'show'])
                ->middleware($twoFactorMiddleware);

            Route::get('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'index'])
                ->middleware($twoFactorMiddleware);

            Route::post('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'store'])
                ->middleware($twoFactorMiddleware);
        }
    });

    /**
     * Livewire
     */
    Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
        if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
            Route::get('/terms-of-service', [Controllers\IndexController::class, 'terms'])->name('terms.show');
            Route::get('/privacy-policy', [Controllers\IndexController::class, 'policy'])->name('policy.show');
        }

        Route::group(['middleware' => ['auth', 'verified']], function () {
            // User & Profile...
            Route::get('/user/profile', [UserProfileController::class, 'show'])
                ->name('profile.show');

            // API...
            if (Jetstream::hasApiFeatures()) {
                Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->middleware('isOrgMember')->name('api-tokens.index');
            }

            // Teams...
            if (Jetstream::hasTeamFeatures()) {
                Route::get('/teams/create', [TeamController::class, 'create'])->middleware('isAdmin')->name('teams.create');
                Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
                Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');
            }
        });
    });


    /**
     * Application
     */
    //Index
    Route::get('/', [Controllers\IndexController::class,'index'])->name('front.page.index');

    Route::get('credits', [Controllers\IndexController::class,'credits'])->name('front.page.credits');
    Route::get('FAQ', [Controllers\IndexController::class,'faq'])->name('front.page.faq');
    Route::get('about', [Controllers\IndexController::class,'about'])->name('front.page.about');

    //Contact
    Route::get('contact', [Controllers\ContactController::class,'create'])->name('front.page.contact');
    Route::post('contact', [Controllers\ContactController::class,'store'])->name('front.page.contact.post');

    Route::get('/blog', [Controllers\BlogController::class,'index'])->name('front.page.blog');
    Route::get('/blog/s/{date}/{slug}', [Controllers\BlogController::class,'show'])->name('blog.show.slug');

    Route::get('/products', [Controllers\ProductController::class,'index'])->name('front.page.products');
    Route::get('/products/s/{date}/{slug}', [Controllers\ProductController::class,'show'])->name('products.show.slug');

    Route::get('/news', [Controllers\NewsController::class,'index'])->name('front.page.news');
    Route::get('/news/s/{date}/{slug}', [Controllers\NewsController::class,'show'])->name('news.show.slug');


    Route::get('test', function () {
        return response()->json(['test']);
    });


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /**
     * DASHBOARD
     */
    Route::prefix('dash')->middleware(['auth:sanctum', 'verified'])->group(function(){
        Route::prefix('blog')->group(function(){
            Route::get('create',[Controllers\BlogController::class,'create'])->name('dash.blog.create');
            Route::post('store',[Controllers\BlogController::class,'store'])->name('dash.blog.store');

            Route::get('list',[Controllers\BlogController::class,'dashIndex'])->name('dash.blog.list');

            Route::get('edit/{id}',[Controllers\BlogController::class,'edit'])->name('dash.blog.edit');
            Route::post('update',[Controllers\BlogController::class,'update'])->name('dash.blog.update');

        });


        Route::post('wysi_image',[Controllers\ImageController::class,'store'])->name('dash.image.store');
    });
});



/**
 * Livewire
 */
Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
    Route::group(['middleware' => ['auth', 'verified']], function () {
        if (Jetstream::hasTeamFeatures()) {
            Route::get('/team-invitations/{invitation}', [TeamInvitationController::class, 'accept'])
                ->middleware(['signed'])
                ->name('team-invitations.accept');
        }
    });
});
