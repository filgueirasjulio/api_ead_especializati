<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api as Controller;

/** Cursos */
Route::get('/courses', [Controller\CourseController::class, 'index']);
Route::get('/courses/{id}', [Controller\CourseController::class, 'show']);

/** Módulos */
Route::get('/courses/{id}/modules', [Controller\ModuleController::class, 'index']);

/** Aulas */
Route::get('/modules/{moduleId}/lessons', [Controller\LessonController::class, 'index']);
Route::get('/modules/{moduleId}/lessons/{lessonId}', [Controller\LessonController::class, 'show']);

/** Dúvidas */
Route::get('/supports', [Controller\SupportController::class, 'index']);
Route::post('/supports', [Controller\SupportController::class, 'store']);
Route::post('/supports/replies/create', [Controller\ReplySupportController::class, 'createReply']);

Route::get('/', function() {
    return response()->json([
        'success' => true,
    ]);
});