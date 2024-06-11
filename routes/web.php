<?php
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Models\WorkingProcess;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomePageController;
use App\Http\Controllers\Website\AboutPageController;
use App\Http\Controllers\Website\TeamDetailPageController;
use App\Http\Controllers\Website\ServicesPageController;
use App\Http\Controllers\Website\ServiceDetailsPageController;
use App\Http\Controllers\Website\NewsPageController;
use App\Http\Controllers\Website\NewDetailsPageController;
use App\Http\Controllers\Website\ContactUsPageController;
use App\Http\Controllers\Website\GalleryPageController;
use App\Http\Controllers\UserManagement\UserController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\PermissionController;
use App\Http\Controllers\Admin\CompanyDetailsController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\Admin\TitlesController;
use App\Http\Controllers\Admin\WorkingProcessController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\ServiceCommentController;
use App\Http\Controllers\Admin\StatisticalController;

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

/* Website */
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about', [AboutPageController::class, 'index'])->name('about');
Route::get('/team_details/{id}', [TeamDetailPageController::class, 'index'])->name('team_details');
Route::get('/services', [ServicesPageController::class, 'index'])->name('services');
Route::get('/service_details/{id}', [ServiceDetailsPageController::class, 'index'])->name('service_details');
Route::get('/news', [NewsPageController::class, 'index'])->name('news');
Route::get('/new_details/{id}', [NewDetailsPageController::class, 'index'])->name('new_details');
Route::get('/contact_us', [ContactUsPageController::class, 'index'])->name('contact_us');
Route::get('/gallery', [GalleryPageController::class, 'index'])->name('gallery');

/* Admin */
Route::group(['middleware' => ['auth']], function(){
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/company', CompanyDetailsController::class);
    Route::resource('/media', SocialMediaController::class);
    Route::resource('/about_us', AboutController::class);
    Route::resource('/service', ServicesController::class);
    Route::resource('/events', EventsController::class);
    Route::resource('/faqs', FAQController::class);
    Route::resource('/requests', RequestsController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/title', TitlesController::class);
    Route::resource('/process', WorkingProcessController::class);
    Route::resource('/comment', CommentsController::class);
    Route::resource('/service_comment', ServiceCommentController::class);
    Route::resource('/statistical', StatisticalController::class);
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
