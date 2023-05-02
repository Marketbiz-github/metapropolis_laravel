<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\TentangKamiAdminController;
use App\Http\Controllers\Admin\ManfaatAdminController;
use App\Http\Controllers\Admin\PerluAndaTahuController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PengertianMetapropolisController;
use App\Http\Controllers\Landing\LandingMasterController;
use App\Http\Controllers\Landing\ProdukController;
use App\Http\Controllers\Landing\TentangKamiController;
use App\Http\Controllers\Landing\ManfaatController;
use App\Http\Controllers\Landing\TentangMetapropolisController;
use App\Http\Controllers\Landing\DetailBlogController;
use App\Http\Controllers\Landing\JurnalController;
use App\Http\Controllers\Landing\FaqController;
use App\Http\Controllers\Landing\ProductKnowledgeController;
use App\Http\Controllers\Admin\JurnalAdminController;
use App\Http\Controllers\Admin\TestimoniAdminController;
use App\Http\Controllers\Admin\FaqAdminController;
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

// Route::get('/', function () {
//     return view('landing.master');
// });
Route::get('/', [LandingMasterController::class, 'index'])->name('/');


//LANDING PAGE
// Route::get('/produk_meta2', [ProdukController::class, 'index'])->name('produk_meta2');
Route::get('/produk_meta', [ProdukController::class, 'index'])->name('produk_meta');
Route::get('/tentang_kami', [TentangKamiController::class, 'index'])->name('tentang_kami');
Route::get('/manfaat', [ManfaatController::class, 'index'])->name('manfaat');
Route::get('/tentang_metapropolis/{id}', [TentangMetapropolisController::class, 'index'])->name('tentang_metapropolis');
Route::get('/detail_manfaat/{id}', [ManfaatController::class, 'detail'])->name('detail_manfaat');
Route::get('/blog_all', [DetailBlogController::class, 'blog_all'])->name('blog_all');
Route::get('/detail_blog/{id}', [DetailBlogController::class, 'index'])->name('detail_blog');
Route::get('/jurnal', [JurnalController::class, 'index'])->name('jurnal');
Route::get('/detail_jurnal/{id}', [JurnalController::class, 'detail'])->name('detail_jurnal');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/testimonial_all', [TestimoniAdminController::class, 'testimonial_all'])->name('testimonial_all');

Route::get('/detail-product/{id}', [ProdukController::class, 'show'])->name('detail.product');


//AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/register_dropshipper', [LoginController::class, 'register_dropshipper'])->name('register_dropshipper');
Route::post('/login', [LoginController::class, 'autenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//ADMIN
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard_admin', [DashboardController::class, 'index'])->name('dashboard_admin');
Route::resource('landing_banner', BannerController::class);
Route::resource('pengertian_metapropolis', PengertianMetapropolisController::class);
Route::resource('tentang_kami_admin', TentangKamiAdminController::class);
Route::resource('manfaat_admin', ManfaatAdminController::class);
Route::resource('perlu_anda_tahu', PerluAndaTahuController::class);
Route::resource('blog', BlogController::class);
Route::resource('jurnal_admin', JurnalAdminController::class);
Route::resource('faq_admin', FaqAdminController::class);

Route::resource('testimoni_admin', TestimoniAdminController::class);
Route::get('/testimoni_admin_gambar_view_create', [TestimoniAdminController::class, 'create_gambar_testi'])->name('testimoni_admin_gambar_view_create');
Route::get('/testimoni_admin_gambar_edit/{id}', [TestimoniAdminController::class, 'edit_gambar_testi'])->name('testimoni_admin_gambar_edit');
Route::post('/testimoni_admin_gambar_create', [TestimoniAdminController::class, 'create_gambar_testimoni'])->name('testimoni_admin_gambar_create');
Route::post('/testimoni_admin_gambar_update/{id}', [TestimoniAdminController::class, 'update_gambar_testi'])->name('testimoni_admin_gambar_update');
Route::post('/testimoni_admin_gambar_delete/{id}', [TestimoniAdminController::class, 'delete_gambar_testi'])->name('testimoni_admin_gambar_delete');
});


Route::get('/public/product-knowledge', [ProductKnowledgeController::class, 'index'])->name('produk.knowlede');
// Route::post('landing_banner', BannerController::class);
