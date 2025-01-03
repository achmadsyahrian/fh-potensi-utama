<?php

use App\Http\Controllers\Landing\AcademicController;
use App\Http\Controllers\Landing\AnnouncementController;
use App\Http\Controllers\Landing\CommunityController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\NewsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Research;
use App\Models\Tag;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/run-sitemap-generate', function () {
    Artisan::call('sitemap:generate');
    return 'Sitemap generated.';
});

Route::get('sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});

// Ubah Bahasa
Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, ['id', 'en'])) {
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('change.language');


Route::group(['namespace' => 'Landing', 'as' => 'landing.'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Tentang Upu
        // Sejarah
        // Route::view('/sejarah', 'landing.about.history')->name('history');

        // Visi Misi
        Route::get('/visi-misi', function() {
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('date', 'desc')
                ->take(4)
                ->get();

            return view('landing.about.purpose', compact('latestPosts'));
        })->name('purpose');

        // Sambutan Dekan
        Route::get('/sambutan-dekan', function(){
            return view('landing.about.speach');
        })->name('speach');

        // Program Studi
            // Hukum S1
            Route::get('/program-studi/hukum-s1', [AcademicController::class, 'law'])->name('academic.law');

        // Akreditasi
        // Route::view('/akreditasi', 'landing.about.accreditation')->name('accreditation');

        // Fasilitas
        // Route::view('/fasilitas', 'landing.about.facility')->name('facility');

    // Informasi
        // Berita
        Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
        Route::get('/berita/category/{categorySlug}', [NewsController::class, 'byCategory'])->name('news.category');
        Route::get('/berita/tag/{tagSlug}', [NewsController::class, 'byTag'])->name('news.tag');
        Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

        // Pengumuman
        Route::get('/pengumuman', [AnnouncementController::class, 'index'])->name('announcement.index');
        Route::get('/pengumuman/category/{categorySlug}', [AnnouncementController::class, 'byCategory'])->name('announcement.category');
        Route::get('/pengumuman/tag/{tagSlug}', [AnnouncementController::class, 'byTag'])->name('announcement.tag');
        Route::get('/pengumuman/detail/{slug}', [AnnouncementController::class, 'show'])->name('announcement.show');

        // Pengumuman Type
        Route::get('/pengumuman/{typeSlug}', [AnnouncementController::class, 'byType'])->name('announcement.byType');

    // Akademik
        // Pengabdian Masyarakat
        // Route::get('/pengabdian-masyarakat', [CommunityController::class, 'index'])->name('community.index');
        // Route::get('/pengabdian-masyarakat/{slug}', [CommunityController::class, 'show'])->name('community.show');

        // Penelitian
        Route::get('/penelitian', function(){
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('date', 'desc')
                ->take(4)
                ->get();

            $data = Research::find(1);
            return view('landing.research.index', compact('data', 'latestPosts'));
        })->name('research.index');

        // Administrasi
        Route::get('/administrasi', function(){
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('date', 'desc')
                ->take(4)
                ->get();

            return view('landing.administration', compact('latestPosts'));
        })->name('administration.index');

        // Kontak Fakultas
        Route::get('/kontak-fakultas', function(){
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('date', 'desc')
                ->take(5)
                ->get();
            $tags = Tag::all();
            $categories = Category::all();

            return view('landing.contact', compact('latestPosts', 'tags', 'categories'));
        })->name('contact');
});
 
