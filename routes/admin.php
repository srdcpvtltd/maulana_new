<?php

/****************** ADMIN MIDDLEWARE PAGES ROUTES START****************/

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\NoticeTypeController;
use App\Http\Controllers\Admin\noticeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\DepartmentinfoController as AdminDepartmentinfoController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\FacultySubcategoryController;
use App\Http\Controllers\Admin\OverviewController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\Web\AboutUsController;
use App\Http\Controllers\Admin\Web\CallToActionController;
use App\Http\Controllers\Admin\Web\CourseController as WebCourseController;
use App\Http\Controllers\Admin\Web\FaqController as WebFaqController;
use App\Http\Controllers\Admin\Web\FeatureController;
use App\Http\Controllers\Admin\Web\GalleryController as WebGalleryController;
use App\Http\Controllers\Admin\Web\NewsController as WebNewsController;
use App\Http\Controllers\Admin\Web\PageController as WebPageController;
use App\Http\Controllers\Admin\Web\SliderController;
use App\Http\Controllers\Admin\Web\SocialSettingController;
use App\Http\Controllers\Admin\Web\TestimonialController;
use App\Http\Controllers\Admin\Web\TopbarSettingController;
use App\Http\Controllers\Admin\Web\WebEventController;
use App\Http\Controllers\Admin\QuicklinkController;
use App\Http\Controllers\Admin\TopbarController;
use App\Http\Controllers\Admin\Web\AdministrationController;
use App\Http\Controllers\Admin\Web\CampusController;
use App\Http\Controllers\Admin\Web\MediapathController;
use App\Http\Controllers\Admin\Web\StudentsectionController;
use App\Http\Controllers\Admin\Web\ViewgalleryController;
use App\Http\Controllers\Admin\Web\ViewnewsController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*******************DASHBOARD ROUTE START*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /*******************DASHBOARD ROUTE END*************/
    /*******************USER ROUTE START*************/
    Route::get('user/verified/{id}', [UserController::class, 'verified'])->name('user.verified');
    Route::get('user/revert_verification/{id}', [UserController::class, 'revert_verification'])->name('user.revert_verification');
    Route::get('user/active/{id}', [UserController::class, 'active'])->name('user.active');
    Route::get('user/in_active/{id}', [UserController::class, 'in_active'])->name('user.in_active');
    Route::resource('user', UserController::class);
    Route::resource('course', WebCourseController::class);
    /*******************COURSE ROUTE END*************/
    /*******************COUNTRY ROUTE START*************/
    Route::resource('country', CountryController::class);
    /*******************COUNTRY ROUTE END*************/
    /*******************STATE ROUTE START*************/
    Route::resource('state', StateController::class);
    /*******************STATE ROUTE END*************/
    /*******************CITY ROUTE START*************/
    Route::resource('city', CityController::class);
    /*******************CITY ROUTE END*************/
    /*******************Notice Type Start*************/
    Route::get('/noticetype/list', [NoticeTypeController::class, 'list'])->name('NoticeType.list');
    Route::get('/noticetype/add', [NoticeTypeController::class, 'add'])->name('NoticeType.add');
    Route::post('/noticetype/add', [NoticeTypeController::class, 'store'])->name('NoticeType.store');
    Route::get('/noticetype/edit{id}', [NoticeTypeController::class, 'edit'])->name('NoticeType.edit');
    Route::post('/noticetype/update', [NoticeTypeController::class, 'update'])->name('NoticeType.update');
    Route::get('/noticetype/delete{id}', [NoticeTypeController::class, 'delete'])->name('NoticeType.delete');
    /*******************Notice Type END*************/
    /*******************Notice  Start*************/
    Route::get('/notice/list', [noticeController::class, 'list'])->name('Notice.list');
    Route::get('/notice/add', [noticeController::class, 'add'])->name('Notice.add');
    Route::post('/notice/add', [noticeController::class, 'store'])->name('Notice.store');
    Route::get('/notice/edit{id}', [noticeController::class, 'edit'])->name('Notice.edit');
    Route::post('/notice/update', [noticeController::class, 'update'])->name('Notice.update');
    Route::get('/notice/delete{id}', [noticeController::class, 'delete'])->name('Notice.delete');

    Route::prefix('web')->group(function () {
        Route::resource('menu', MenuController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('feature', FeatureController::class);
        Route::resource('about-us', AboutUsController::class);
        // Route::resource('course', WebCourseController::class);
        Route::resource('web-event', WebEventController::class);
        Route::post('/getsubmenu', [MenuController::class, 'getSubmenu'])->name('get_submenu');

        //Overview
        Route::get('/overview/list', [OverviewController::class, 'list'])->name('Overview.list');
        Route::post('/overview/store', [OverviewController::class, 'store'])->name('Overview.store');

        //team
        Route::get('/team/list', [TeamController::class, 'list'])->name('Team.list');
        Route::get('/team/add', [TeamController::class, 'add'])->name('Team.add');
        Route::post('/team/store', [TeamController::class, 'store'])->name('Team.store');
        Route::get('/team/edit{id}', [TeamController::class, 'edit'])->name('Team.edit');
        Route::post('/team/update', [TeamController::class, 'update'])->name('Team.update');
        Route::get('/team/delete{id}', [TeamController::class, 'delete'])->name('Team.delete');

        //department info
        Route::get('/info/list', [AdminDepartmentinfoController::class, 'list'])->name('Info.list');
        Route::get('/info/add', [AdminDepartmentinfoController::class, 'add'])->name('Info.add');
        Route::post('/info/store', [AdminDepartmentinfoController::class, 'store'])->name('Info.store');
        Route::get('/info/edit{id}', [AdminDepartmentinfoController::class, 'edit'])->name('Info.edit');
        Route::post('/info/update', [AdminDepartmentinfoController::class, 'update'])->name('Info.update');
        Route::get('/info/delete{id}', [AdminDepartmentinfoController::class, 'delete'])->name('Info.delete');

        //faculty category
        Route::get('/faculty/category/list', [FacultyController::class, 'list'])->name('faculty.category.list');
        Route::get('/faculty/category/add', [FacultyController::class, 'add'])->name('faculty.category.add');
        Route::post('/faculty/category/store', [FacultyController::class, 'store'])->name('faculty.category.store');
        Route::get('/faculty/category/edit{id}', [FacultyController::class, 'edit'])->name('faculty.category.edit');
        Route::post('/faculty/category/update', [FacultyController::class, 'update'])->name('faculty.category.update');
        Route::get('/faculty/category/delete{id}', [FacultyController::class, 'delete'])->name('faculty.category.delete');

        Route::post('faculty/getsubcategory', [FacultyController::class, 'getSubcategory'])->name('faculty.getsubcategory');

        //faculty subcategory
        Route::get('/faculty/subcategory/list', [FacultySubcategoryController::class, 'list'])->name('faculty.subcategory.list');
        Route::get('/faculty/subcategory/add', [FacultySubcategoryController::class, 'add'])->name('faculty.subcategory.add');
        Route::post('/faculty/subcategory/store', [FacultySubcategoryController::class, 'store'])->name('faculty.subcategory.store');
        Route::get('/faculty/subcategory/edit{id}', [FacultySubcategoryController::class, 'edit'])->name('faculty.subcategory.edit');
        Route::post('/faculty/subcategory/update', [FacultySubcategoryController::class, 'update'])->name('faculty.subcategory.update');
        Route::get('/faculty/subcategory/delete{id}', [FacultySubcategoryController::class, 'delete'])->name('faculty.subcategory.delete');

        //Media Path
        Route::get('media_path/list', [MediapathController::class, 'list'])->name('Mediapath.list');
        Route::post('media_path/store', [MediapathController::class, 'store'])->name('Mediapath.store');
        Route::get('media_path/delete/{id}', [MediapathController::class, 'delete'])->name('Mediapath.delete');

        //Quick-links
        Route::get('/quick_link/list', [QuicklinkController::class, 'list'])->name('Quicklink.list');
        Route::get('/quick_link/add', [QuicklinkController::class, 'add'])->name('Quicklink.add');
        Route::post('/quick_link/store', [QuicklinkController::class, 'store'])->name('Quicklink.store');
        Route::get('/quick_link/edit{id}', [QuicklinkController::class, 'edit'])->name('Quicklink.edit');
        Route::post('/quick_link/update', [QuicklinkController::class, 'update'])->name('Quicklink.update');
        Route::get('/quick_link/delete{id}', [QuicklinkController::class, 'delete'])->name('Quicklink.delete');

        //Top Bar
        Route::get('/top_bar/list', [TopbarController::class, 'list'])->name('Topbar.list');
        Route::get('/top_bar/add', [TopbarController::class, 'add'])->name('Topbar.add');
        Route::post('/top_bar/store', [TopbarController::class, 'store'])->name('Topbar.store');
        Route::get('/top_bar/edit{id}', [TopbarController::class, 'edit'])->name('Topbar.edit');
        Route::post('/top_bar/update', [TopbarController::class, 'update'])->name('Topbar.update');
        Route::get('/top_bar/delete{id}', [TopbarController::class, 'delete'])->name('Topbar.delete');

        //View-Gallery
        Route::get('galleries/list', [ViewgalleryController::class, 'list'])->name('Viewgalleries.list');
        Route::get('galleries/add', [ViewgalleryController::class, 'add'])->name('Viewgalleries.add');
        Route::post('galleries/store', [ViewgalleryController::class, 'store'])->name('Viewgalleries.store');
        Route::get('galleries/edit{id}', [ViewgalleryController::class, 'edit'])->name('Viewgalleries.edit');
        Route::post('galleries/update', [ViewgalleryController::class, 'update'])->name('Viewgalleries.update');
        Route::get('galleries/delete{id}', [ViewgalleryController::class, 'delete'])->name('Viewgalleries.delete');

        //View-Newspaper
        Route::get('view_news/list', [ViewnewsController::class, 'list'])->name('view_news.list');
        Route::get('view_news/add', [ViewnewsController::class, 'add'])->name('view_news.add');
        Route::post('view_news/store', [ViewnewsController::class, 'store'])->name('view_news.store');
        Route::get('view_news/edit{id}', [ViewnewsController::class, 'edit'])->name('view_news.edit');
        Route::post('view_news/update', [ViewnewsController::class, 'update'])->name('view_news.update');
        Route::get('view_news/delete{id}', [ViewnewsController::class, 'delete'])->name('view_news.delete');

        //Campus
        Route::get('/campus/list', [CampusController::class, 'list'])->name('campus.list');
        Route::get('/campus/add', [CampusController::class, 'add'])->name('campus.add');
        Route::post('/campus/store', [CampusController::class, 'store'])->name('campus.store');
        Route::get('/campus/edit{id}', [CampusController::class, 'edit'])->name('campus.edit');
        Route::post('/campus/update', [CampusController::class, 'update'])->name('campus.update');
        Route::get('/campus/delete{id}', [CampusController::class, 'delete'])->name('campus.delete');

        //Administration
        Route::get('/administration/list', [AdministrationController::class, 'list'])->name('administration.list');
        Route::get('/administration/add', [AdministrationController::class, 'add'])->name('administration.add');
        Route::post('/administration/store', [AdministrationController::class, 'store'])->name('administration.store');
        Route::get('/administration/edit{id}', [AdministrationController::class, 'edit'])->name('administration.edit');
        Route::post('/administration/update', [AdministrationController::class, 'update'])->name('administration.update');
        Route::get('/administration/delete{id}', [AdministrationController::class, 'delete'])->name('administration.delete');

        //STUDENT Section
        Route::get('/student/list', [StudentsectionController::class, 'list'])->name('student.list');
        Route::get('/student/add', [StudentsectionController::class, 'add'])->name('student.add');
        Route::post('/student/store', [StudentsectionController::class, 'store'])->name('student.store');
        Route::get('/student/edit{id}', [StudentsectionController::class, 'edit'])->name('student.edit');
        Route::post('/student/update', [StudentsectionController::class, 'update'])->name('student.update');
        Route::get('/student/delete{id}', [StudentsectionController::class, 'delete'])->name('student.delete');

        Route::resource('news', WebNewsController::class);
        Route::resource('gallery', WebGalleryController::class);
        Route::resource('faq', WebFaqController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('page', WebPageController::class);
        Route::resource('call-to-action', CallToActionController::class);
        Route::resource('social-setting', SocialSettingController::class);
        Route::resource('topbar-setting', TopbarSettingController::class);
    });
});
/****************** ADMIN MIDDLEWARE PAGES ROUTES END****************/
