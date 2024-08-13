<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverViewController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PetCareController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\PetGroomingController;
use App\Http\Controllers\PetParksController;
use App\Http\Controllers\PetShopController;
use App\Http\Controllers\PetTreatmentController;
use App\Http\Controllers\PageController;
use App\Models\Favorite;
use Illuminate\Support\Facades\Mail;

Route::get('/petinfo', function () {
    return view('pages/petInfoPdf');
});
Route::get('/about', function () {
    return view('pages/aboutUsPage');
});
Route::get('/blog', function () {
    return view('pages/blogPage');
});
Route::get('/petCar', function () {
    return view('pages/petCarePage');
});

// Back-end
Route::get('/dashboard', function () {
    return view('/admin/adminDashboard/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile/createPost', [ProfileController::class, 'createPost'])->name('profile.create');
    Route::post('/profile', [ProfileController::class, 'storePost'])->name('profile.storePost');
    Route::get('/profile/detailPost/{id}', [ProfileController::class, 'detailPost'])->name('profile.detailPost');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/userPost', [ProfileController::class, 'post'])->name('profile.post');
    Route::get('/profile/history', [ProfileController::class, 'history'])->name('profile.history');

    Route::post('auth', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');

    // Users post
    Route::get('/admin/adminDashboard/userPost/index', [ProfileController::class, 'index'])->name('userPost.index');
    Route::get('/admin/adminDashboard/userPost/show/{id}', [ProfileController::class, 'show'])->name('userPost.show');
    Route::get('/admin/adminDashboard/userPost/update/{id}', [ProfileController::class, 'editShow'])->name('userPost.editShow');
    Route::post('/admin/adminDashboard/userPost/update/{id}', [ProfileController::class, 'updateShow'])->name('userPost.updateShow');
    Route::post('/admin/adminDashboard/userPost/index/{id}', [ProfileController::class, 'delete'])->name('userPost.delete');

    // Users
    Route::get('/admin/adminDashboard/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/adminDashboard/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/admin/adminDashboard/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/admin/adminDashboard/users/show/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/admin/adminDashboard/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/admin/adminDashboard/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/adminDashboard/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__ . '/auth.php';

// Dashboard 
Route::get('/dashboard', function () {
    return view('admin.adminDashboard.dashboard');
});

// Overview
Route::get('/admin/adminDashboard/overView/index', [OverViewController::class, 'index']);

// Pets
Route::get('/admin/adminDashboard/pets/index', [PetsController::class, 'index'])->name('pets.index');
Route::get('/admin/adminDashboard/pets/create', [PetsController::class, 'create']);
Route::post('/admin/adminDashboard/pets/create', [PetsController::class, 'store']);
Route::post('/admin/adminDashboard/pets/index/{id}', [PetsController::class, 'destroy']);
Route::get('/admin/adminDashboard/pets/update/{id}', [PetsController::class, 'edit']);
Route::post('/admin/adminDashboard/pets/update/{id}', [PetsController::class, 'update']);
Route::get('/admin/adminDashboard/pets/show/{id}', [PetsController::class, 'show']);

// Blogs
Route::get('/admin/adminDashboard/blogs/index', [BlogController::class, 'index']);
Route::get('/admin/adminDashboard/blogs/create', [BlogController::class, 'create']);
Route::post('/admin/adminDashboard/blogs/create', [BlogController::class, 'store']);
Route::post('/admin/adminDashboard/blogs/index/{id}', [BlogController::class, 'destroy']);
Route::get('/admin/adminDashboard/blogs/update/{id}', [BlogController::class, 'edit']);
Route::post('/admin/adminDashboard/blogs/update/{id}', [BlogController::class, 'update']);
Route::get('/admin/adminDashboard/blogs/show/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::post('/admin/adminDashboard/blogs/like/{id}', [BlogController::class, 'like'])->name('blogs.like');
Route::post('/admin/adminDashboard/blogs/share/{id}', [BlogController::class, 'share'])->name('blogs.share');
Route::put('/admin/adminDashboard/blogs/view/{id}', [BlogController::class, 'view'])->name('blogs.view');
Route::put('/admin/adminDashboard/blogs/dislike/{id}', [BlogController::class, 'dislike'])->name('blogs.dislike');

// Pet Care
Route::get('/admin/adminDashboard/petCare/index', [PetCareController::class, 'index']);
Route::get('/admin/adminDashboard/petCare/create', [PetCareController::class, 'create']);
Route::post('/admin/adminDashboard/petCare/create', [PetCareController::class, 'store']);
Route::post('/admin/adminDashboard/petCare/index/{id}', [PetCareController::class, 'destroy']);
Route::get('/admin/adminDashboard/petCare/update/{id}', [PetCareController::class, 'edit']);
Route::post('/admin/adminDashboard/petCare/update/{id}', [PetCareController::class, 'update']);
Route::get('/admin/adminDashboard/petCare/show/{id}', [PetCareController::class, 'show']);

// Pet Grooming
Route::get('/admin/adminDashboard/petGrooming/index', [PetGroomingController::class, 'index']);
Route::get('/admin/adminDashboard/petGrooming/create', [PetGroomingController::class, 'create']);
Route::post('/admin/adminDashboard/petGrooming/create', [PetGroomingController::class, 'store']);
Route::get('/admin/adminDashboard/petGrooming/update/{id}', [PetGroomingController::class, 'edit']);
Route::post('/admin/adminDashboard/petGrooming/update/{id}', [PetGroomingController::class, 'update']);
Route::get('/admin/adminDashboard/petGrooming/show/{id}', [PetGroomingController::class, 'show']);
Route::post('/admin/adminDashboard/petGrooming/index/{id}', [PetGroomingController::class, 'destroy']);
Route::get('/pages/petGrooming', [PetGroomingController::class, 'view']);

// Pet Park
Route::get('/admin/adminDashboard/petPark/index', [PetParksController::class, 'index']);
Route::get('/admin/adminDashboard/petPark/create', [PetParksController::class, 'create']);
Route::post('/admin/adminDashboard/petPark/create', [PetParksController::class, 'store']);
Route::post('/admin/adminDashboard/petPark/index/{id}', [PetParksController::class, 'destroy']);
Route::get('/admin/adminDashboard/petPark/update/{id}', [PetParksController::class, 'edit']);
Route::post('/admin/adminDashboard/petPark/update/{id}', [PetParksController::class, 'update']);
Route::get('/admin/adminDashboard/petPark/show/{id}', [PetParksController::class, 'show']);
Route::get('/pages/petPark', [PetParksController::class, 'view']);

// Pet Shop
Route::get('/admin/adminDashboard/petShop/index', [PetShopController::class, 'index']);
Route::get('/admin/adminDashboard/petShop/create', [PetShopController::class, 'create']);
Route::post('/admin/adminDashboard/petShop/create', [PetShopController::class, 'store']);
Route::post('/admin/adminDashboard/petShop/index/{id}', [PetShopController::class, 'destroy']);
Route::get('/admin/adminDashboard/petShop/update/{id}', [PetShopController::class, 'edit']);
Route::post('/admin/adminDashboard/petShop/update/{id}', [PetShopController::class, 'update']);
Route::get('/admin/adminDashboard/petShop/show/{id}', [PetShopController::class, 'show']);
Route::get('/pages/petShop', [PetShopController::class, 'view']);

// Pet Treatment
Route::get('/admin/adminDashboard/petTreatment/index', [PetTreatmentController::class, 'index']);
Route::get('/admin/adminDashboard/petTreatment/create', [PetTreatmentController::class, 'create']);
Route::post('/admin/adminDashboard/petTreatment/create', [PetTreatmentController::class, 'store']);
Route::post('/admin/adminDashboard/petTreatment/index/{id}', [PetTreatmentController::class, 'destroy']);
Route::get('/admin/adminDashboard/petTreatment/update/{id}', [PetTreatmentController::class, 'edit']);
Route::post('/admin/adminDashboard/petTreatment/update/{id}', [PetTreatmentController::class, 'update']);
Route::get('/admin/adminDashboard/petTreatment/show/{id}', [PetTreatmentController::class, 'show']);
Route::get('/pages/petTreatment', [PetTreatmentController::class, 'view']);

// Category
Route::get('/admin/adminDashboard/category/index', [CategoryController::class, 'index']);
Route::get('/admin/adminDashboard/category/create', [CategoryController::class, 'create']);
Route::post('/admin/adminDashboard/category/create', [CategoryController::class, 'store']);
Route::post('/admin/adminDashboard/category/index/{id}', [CategoryController::class, 'destroy']);
Route::get('/admin/adminDashboard/category/update/{id}', [CategoryController::class, 'edit']);
Route::post('/admin/adminDashboard/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/admin/adminDashboard/category/show/{id}', [CategoryController::class, 'show']);

// Contact page
Route::get('/pages/contactPage', [ContactController::class, 'show'])->name('contact.show');
Route::post('/pages/contactPage', [ContactController::class, 'send'])->name('contact.send');

// Page
Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/pages/detailPets/{id}', [PageController::class, 'detail'])->name('detailPets');

// Blog page
Route::get('/pages/blogPage', [BlogController::class, 'blog'])->name('blog');
Route::post('/pages/blogPage/{id}/like', [BlogController::class, 'like'])->name('like.blog');
Route::get('/pages/blogPage/{id}', [SocialShareButtonsController::class, 'blogPage'])->name('social.share.blog');
Route::get('/pages/blogPage', [SocialShareButtonsController::class, 'share']);


// detail blog
Route::get('/pages/detailBlogs/{id}', [BlogController::class, 'blogDetail'])->name('detailBlogs');

// userpost
Route::get('/userpost', function () {
    return view('pages/userPost');
});


//pets page
Route::get('/pages/pets-show/petsPage', [PetsController::class, 'pets']);
Route::get('/pages/pets-show/dogs', [PetsController::class, 'dogIndex'])->name('dog-show');
Route::get('/pages/pets-show/cats', [PetsController::class, 'catIndex'])->name('cat-show');
Route::get('/pages/pets-show/petsPage', [PetsController::class, 'pets']);
Route::get('/pages/pets-show/dogs', [PetsController::class, 'dogIndex'])->name('dog-show');
Route::get('/pages/pets-show/cats', [PetsController::class, 'catIndex'])->name('cat-show');
Route::get('/pets/search', [PetsController::class, 'search'])->name('pets.search');

// Petcare
Route::get('/pages/petCarePage', [PetCareController::class, 'petcare']);

// Adoption
Route::get('/adopt/create/{pet}', [AdoptionController::class, 'create'])->name('adoption.create');
Route::post('/adopt', [AdoptionController::class, 'store'])->name('adoption.store');
Route::get('/petinfo', [AdoptionController::class, 'viewPdf'])->name('adoption.viewPdf');
Route::get('/adoption/success', [AdoptionController::class, 'success'])->name('adoption.success');
Route::get('/adoption/view-pdf', [AdoptionController::class, 'viewPdf'])->name('adoption.viewPdf');
Route::get('/adoption/downloadPdf', [AdoptionController::class, 'downloadPdf'])->name('adoption.downloadPdf');


// Admin adoption page
Route::post('/admin/adoptions/{adoption}/approve', [AdminController::class, 'approve'])->name('admin.adoptions.approve');
Route::post('/admin/adoptions/{adoption}/reject', [AdminController::class, 'reject'])->name('admin.adoptions.reject');
Route::get('/admin/adminDashboard/adoption/index', [AdminController::class, 'index'])->name('admin.adoptions.index');
Route::patch('adoptions/{id}/status', [AdminController::class, 'changeAdoptionStatus'])->name('admin.adoptions.changeStatus');
Route::get('/admin/adminDashboard/adoption/adoptionHistory', [AdminController::class, 'history'])->name('adoptions.history');


// Donation
Route::get('/admin/adminDashboard/donation/index', [DonationController::class, 'index']);
Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
Route::resource('donations', DonationController::class);

// Donation 
Route::get('/profile/favorites', [FavoriteController::class, 'favorites'])->name('profile.favorites');
Route::post('/favorite/add', [FavoriteController::class, 'addFavorite'])->name('favorite.add');
Route::post('/favorite/remove', [FavoriteController::class, 'remove'])->name('favorite.remove');