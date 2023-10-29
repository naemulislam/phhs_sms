<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use Illuminate\Support\Facades\Artisan;
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
//Clear Cache
Route::get('clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');//
    $exitCode = Artisan::call('storage:link');
    return 'Cache Cleared Successfully';
    //Return anything
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/history', 'history')->name('history');
    Route::get('/about', 'about')->name('about');
    Route::get('/principle/info', 'principleInfo')->name('principleInfo');
    Route::get('/school/teacher', 'teachers')->name('school.teachers');
    Route::get('/students', 'students')->name('school.students');
    //Acadamic info
    Route::get('/class/routine', 'classRoutin')->name('class.routin');
    Route::get('/exam/routine', 'examRoutin')->name('exam.routin');
    Route::get('/sylebus', 'sylebus')->name('sylebus');
    Route::get('/result', 'result')->name('result');
    Route::get('/academic/subject', 'academicSubject')->name('academic.subject');
    //Gallery route
    Route::get('/picture/gallery', 'galleryPhoto')->name('gallery.picture');
    Route::get('/video/gallery', 'videoGallery')->name('video.gallery');
    //more route
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/school/staff', 'schoolStaff')->name('school.staff');
    Route::get('/annual/statistics', 'annualResult')->name('annual.result');
    // All Notice route
    Route::get('/all/notice', 'allNotice')->name('all.notice');
    Route::get('/online/admission', 'admission')->name('admission');
});
Route::controller(LoginController::class)->group(function(){
    //School
    Route::get('/school/portal', 'schoolPortal')->name('school.portal');
    Route::post('/school/portal/store', 'schoolPortalStore')->name('schoolPortal.store');
    Route::get('/school/portal/logout', 'schoolPortalLogout')->name('schoolPortal.logout');
    //Student
    Route::get('/student/login', 'studentPortal')->name('student.portal');
    Route::post('/student/login/store', 'studentPortalStore')->name('student.login');
    Route::get('/student/logout', 'studentPortalLogout')->name('student.logout');
    //User
    Route::get('/user/login', 'userLogin')->name('user.login');
    Route::post('/user/login/store', 'userLoginStore')->name('userLogin.store');
    Route::get('/user/logout', 'userLogout')->name('user.logout');
});
Route::controller(RegisterController::class)->group(function(){
    Route::post('/school/portal/register','portalRegister')->name('portal.register');
    Route::post('/student/portal/register','studentRegister')->name('student.register');
});
//School Dashboard
Route::prefix('school/portal')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('school.dashboard');
    //Group Route
    Route::controller(GroupController::class)->group(function(){
        Route::get('/group','index')->name('group.index');
        Route::post('/group/store','store')->name('group.store');
        Route::put('/group/update/{group}','update')->name('group.update');
        Route::get('/group/destroy/{group}','destroy')->name('group.destroy');
        Route::post('/group/status/{group}','status')->name('group.status');
    });
    //subject Route
    Route::controller(SubjectController::class)->group(function(){
        Route::get('/subject','index')->name('subject.index');
        Route::get('/subject/create','create')->name('subject.create');
        Route::post('/subject/store','store')->name('subject.store');
        Route::get('/subject/edit/{subject}','edit')->name('subject.edit');
        Route::put('/subject/update/{subject}','update')->name('subject.update');
        Route::get('/subject/destroy/{subject}','destroy')->name('subject.destroy');
        Route::post('/subject/status/{subject}','status')->name('subject.status');
    });
    //Student Route
    Route::controller(StudentController::class)->group(function(){
        Route::get('/student','index')->name('student.index');
        Route::get('/student/create','create')->name('student.create');
        Route::post('/student/store','store')->name('student.store');
        Route::get('/student/show/{student}','show')->name('student.show');
        Route::get('/student/edit/{student}','edit')->name('student.edit');
        Route::put('/student/update/{student}','update')->name('student.update');
        Route::get('/student/destroy/{student}','destroy')->name('student.destroy');
        Route::post('/student/status/{student}','status')->name('student.status');
        Route::get('/student/id','studentId')->name('id.generate');
    });
    //Teacher Route
    Route::controller(TeacherController::class)->group(function(){
        Route::get('/teacher','index')->name('teacher.index');
        Route::get('/teacher/create','create')->name('teacher.create');
        Route::post('/teacher/store','store')->name('teacher.store');
        Route::get('/teacher/show/{teacher}','show')->name('teacher.show');
        Route::get('/teacher/edit/{teacher}','edit')->name('teacher.edit');
        Route::put('/teacher/update/{teacher}','update')->name('teacher.update');
        Route::get('/teacher/destroy/{teacher}','destroy')->name('teacher.destroy');
        Route::post('/teacher/status/{teacher}','status')->name('teacher.status');
    });
    //Staff Route
    Route::controller(StaffController::class)->group(function(){
        Route::get('/staff','index')->name('staff.index');
        Route::get('/staff/create','create')->name('staff.create');
        Route::post('/staff/store','store')->name('staff.store');
        Route::get('/staff/show/{staff}','show')->name('staff.show');
        Route::get('/staff/edit/{staff}','edit')->name('staff.edit');
        Route::put('/staff/update/{staff}','update')->name('staff.update');
        Route::get('/staff/destroy/{staff}','destroy')->name('staff.destroy');
        Route::post('/staff/status/{staff}','status')->name('staff.status');
    });
    //Slider Route
    Route::controller(SliderController::class)->group(function(){
        Route::get('/slider','index')->name('slider.index');
        Route::get('/slider/create','create')->name('slider.create');
        Route::post('/slider/store','store')->name('slider.store');
        Route::get('/slider/edit/{slider}','edit')->name('slider.edit');
        Route::put('/slider/update/{slider}','update')->name('slider.update');
        Route::get('/slider/destroy/{slider}','destroy')->name('slider.destroy');
        Route::post('/slider/status/{slider}','status')->name('slider.status');
    });
    //Notice Route
    Route::controller(NoticeController::class)->group(function(){
        Route::get('/notice','index')->name('notice.index');
        Route::get('/notice/create','create')->name('notice.create');
        Route::post('/notice/store','store')->name('notice.store');
        Route::get('/notice/edit/{notice}','edit')->name('notice.edit');
        Route::put('/notice/update/{notice}','update')->name('notice.update');
        Route::get('/notice/destroy/{notice}','destroy')->name('notice.destroy');
        Route::post('/notice/status/{notice}','status')->name('notice.status');
    });
    Route::controller(GeneralSettingController::class)->group(function(){
        Route::get('/general/setting','index')->name('settings.index');
        Route::post('/general/setting/update/{setting?}','update')->name('settings.update');
    });
});

// Student Dashboard
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/student/dashboard', [StudentDashboardController::class,'dashboard'])->name('student.dashboard');
});
// User Dashboard
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/user/dashboard', [UserController::class,'dashboard'])->name('user.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
