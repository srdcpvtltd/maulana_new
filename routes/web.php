<?php

use App\Helpers\PaymentGateway;

use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\ApplicationController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\FaqController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\Web\NoticeListController;
use App\Http\Controllers\FrontWeb\DashboardController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontwebuser\DashbController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AcademicsController;
use App\Http\Controllers\Web\ActStatuesController;
use App\Http\Controllers\Web\AdministrationController;
use App\Http\Controllers\Web\ChancellorController;
use App\Http\Controllers\Web\ContactusController;
use App\Http\Controllers\Web\LegacyController;
use App\Http\Controllers\Web\LogoController;
use App\Http\Controllers\Web\MissionVisionController;
use App\Http\Controllers\Web\NotificationsController;
use App\Http\Controllers\Web\OrdinancesController;
use App\Http\Controllers\Web\VcController;
use App\Http\Controllers\Web\WebFacultyController;

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

/******************LOGIN PAGE ROUTES START****************/

// Web Routes
Route::middleware(['XSS'])->namespace('Web')->group(function () {

  // Home Route
  Route::get('/', [IndexController::class, 'index'])->name('index');

  //about
  Route::get('/about', [AboutController::class,'about'])->name('about');

  //mission & vision
  Route::get('/vision_mission', [MissionVisionController::class,'missionVision'])->name('missionVision');

  //Chancellor
  Route::get('/chancellor', [ChancellorController::class, 'chancellor'])->name('chancellor');

  //legacy
  Route::get('/legacy',[LegacyController::class,'legacy'])->name('legacy');

  //Logo
  Route::get('/logo',[LogoController::class,'logo'])->name('logo');

  //act_statutes
  Route::get('/act_statutes',[ActStatuesController::class,'actStatutes'])->name('actStatutes');

  //ordinances
  Route::get('/ordinances',[OrdinancesController::class,'ordinances'])->name('ordinances');

  //Administration
  Route::get('/chancellor_1', [AdministrationController::class,'chancellor_1'])->name('chancellor_1');
  Route::get('/vc', [AdministrationController::class,'vc'])->name('vc');
  Route::get('/university_authority', [AdministrationController::class,'universityAuthority'])->name('universityAuthority');
  Route::get('/statutory_bodies', [AdministrationController::class,'statutoryBodies'])->name('statutoryBodies');
  Route::get('/university_officers', [AdministrationController::class,'universityOfficers'])->name('universityOfficers');
  Route::get('/directory', [AdministrationController::class,'directory'])->name('directory');

  //Notifications
  //Route::get('/notifications', [NotificationsController::class,'notifications'])->name('notification');

  //Latest Notice
  Route::get('/latest', [NotificationsController::class,'latest'])->name('latest');

  Route::get('/events', [NotificationsController::class,'events'])->name('events');

  //Team
//   Route::get('/team',[TeamController::class,'team'])->name('team');
//   Route::get('/view-team/{id}',[TeamController::class,'viewTeam'])->name('viewTeam');

  //faculty
  Route::get('/faculty',[WebFacultyController::class,'faculty'])->name('faculty');
  Route::get('/viewfaculties/{id}',[WebFacultyController::class,'viewfaculties'])->name('viewfaculties');
  Route::get('/teams/{id}',[WebFacultyController::class,'teams'])->name('faculty.team');
  Route::get('/view-team/{id}',[WebFacultyController::class,'viewTeam'])->name('faculty.viewTeam');

  //Academics
  Route::get('/department_arabic', [AcademicsController::class,'departmentArabic'])->name('departmentArabic');

  //Contact Us
  Route::get('/contact_us', [ContactusController::class,'contactUs'])->name('contact_us');
  Route::get('/address', [ContactusController::class,'address'])->name('address');
  Route::get('/how_to_reach', [ContactusController::class,'howtoReach'])->name('howtoReach');

  //fit-india-movement
  Route::get('/fit_india_movement',[IndexController::class,'fitIndia'])->name('fitIndia');




  // Course Route
  Route::get('/course', [CourseController::class, 'index'])->name('course');
  Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.single');
  // Event Route
  Route::get('/event', [EventController::class, 'index'])->name('event');
  Route::get('/event/{id}/{slug}', [EventController::class, 'show'])->name('event.single');
  // Faq Route
  Route::get('/faq', [FaqController::class, 'index'])->name('faq');
  // Gallery Route
  Route::get('/gallery_thum', [GalleryController::class, 'index'])->name('galleryThum');
  Route::get('/view_gallery/{id}', [GalleryController::class, 'viewGallery'])->name('viewGallery');
  // News Route
  Route::get('/news', [NewsController::class, 'index'])->name('news');
  Route::get('/newspaper/{id}', [NewsController::class, 'show'])->name('news.single');
  // Page Route
  Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.single');

  // Application Route
  Route::resource('application', ApplicationController::class);

  //Notice-list
  Route::get('/view-notice-list/{type}',[NoticeListController::class,'noticeList'])->name('web.noticeList');
  Route::get('/noticelist-single{id}',[NoticeListController::class,'viewNotice'])->name('web.viewNotice');

  // SetCookie Route
  Route::get('/set-cookie', [IndexController::class, 'setCookie'])->name('setCookie');
});

// Set Lang Version
Route::get('locale/language/{locale}', function ($locale) {

  \Session::put('locale', $locale);

  \App::setLocale($locale);

  return redirect()->back();
})->name('version');



//Admin Routes
Route::view('login', 'auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login');
/******************LOGIN PAGE ROUTES END****************/

/*******************REGISTER ROUTE START*************/
Route::view('register', 'auth.register');
Route::post('register', [AuthController::class, 'register'])->name('register');
/*******************REGISTER ROUTE END*************/

/*******************LOGOUT ROUTE START*************/
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
/*******************LOGOUT ROUTE END*************/
Route::post('get_city_against_states', [AuthController::class, 'getCityAgainstStates'])->name('get_city_against_states');
Route::post('get_state_against_countries', [AuthController::class, 'getStateAgainstCountries'])->name('get_state_against_countries');
Route::post('get_course_aganist_college', [AuthController::class, 'getCourseAganistCollege'])->name('get_course_aganist_college');
Route::post('get_semester_aganist_course', [AuthController::class, 'getSemesterAganistCourse'])->name('get_semester_aganist_course');
Route::post('get_subject_aganist_semester', [AuthController::class, 'getSubjectAganistSemester'])->name('get_subject_aganist_semester');
Route::get('get_course_fields', [AuthController::class, 'getCourseFields'])->name('get_course_fields');
Route::post('razor/callback', [AuthController::class, 'razorCallback'])->name('razor.callback');
Route::post('get_subject_aganist_course', [AuthController::class, 'getSubjectAganistCourse'])->name('get_subject_aganist_course');

Route::post('get_student_profiles_against_cities', [AuthController::class, 'getStudentProfilesAgainstCity'])->name('get_student_profiles_against_cities');


/*******************ADMIN ROUTE START*************/
include __DIR__ . '/admin.php';
/*******************ADMIN ROUTE END*************/

/*******************STUDENT ROUTE START*************/
include __DIR__ . '/student.php';
/*******************STUDENT ROUTE END*************/

/*******************COLLEGE ROUTE START*************/
include __DIR__ . '/college.php';
/*******************COLLEGE ROUTE END*************/

/*******************TEACHER ROUTE START*************/
include __DIR__ . '/teacher.php';
/*******************TEACHER ROUTE END*************/

/*******************Prospect ROUTE START*************/
include __DIR__ . '/prospect.php';
/*******************Prospect ROUTE END*************/
/******************FUNCTIONALITY ROUTES****************/
Route::get('cd', function () {
  Artisan::call('config:cache');
  Artisan::call('migrate:refresh');
  Artisan::call('db:seed', ['--class' => DatabaseSeeder::class]);
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('migrate', function () {
  Artisan::call('config:cache');
  Artisan::call('migrate');
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('cache_clear', function () {
  Artisan::call('config:cache');
  Artisan::call('cache:clear');
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('test', function () {
  dd(config('services.razor_pay'));
  // PaymentGateway::proccess();
});
Route::get('add_categories', function () {

  DB::table('document_categories')->insert([
    ['name' => 'Passport Size Photograph'],
    ['name' => 'Full Signatue of the Candidate'],
    ['name' => 'Full Signatue of the Father'],
    ['name' => 'Full Signatue of the Mother'],
    ['name' => 'Full Signatue of the Guradian'],
    ['name' => 'Aadhar Card'],
    ['name' => 'Citizen Certificate'],
    ['name' => 'Caste Certificate From the Appropriate Authority'],
    ['name' => 'Physically Handicapped Ceertificate with Percentage of Disability from the Appropriate'],
    ['name' => 'Ex-Serviceman Certificate'],
    ['name' => '10th or Equivalent Certificate'],
    ['name' => '10th or Equivalent Martsheet'],
  ]);
});





