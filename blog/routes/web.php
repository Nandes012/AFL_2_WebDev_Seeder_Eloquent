<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Portfolio routes
Route::get('/portfolio/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/portfolio/skills', [PortfolioController::class, 'skills'])->name('portfolio.skills');
Route::get('/portfolio/experiences', [PortfolioController::class, 'experiences'])->name('portfolio.experiences');
Route::get('/portfolio/projects/{id}', [PortfolioController::class, 'showProject'])->name('portfolio.projects.show');
Route::get('/portfolio/skills/{id}', [PortfolioController::class, 'showSkill'])->name('portfolio.skills.show');
Route::get('/portfolio/experiences/{id}', [PortfolioController::class, 'showExperience'])->name('portfolio.experiences.show');