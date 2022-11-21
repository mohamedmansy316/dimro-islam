<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Subjects\BookController;
use App\Http\Controllers\Subjects\ArticleController;
use App\Http\Controllers\Subjects\AudioController;
use App\Http\Controllers\Subjects\FatawaController;
use App\Http\Controllers\Subjects\VideoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//static pages
Route::get('/', [HomeController::class , 'index'])->name('index');
Route::get('about', [PagesController::class , 'getAbout'])->name('about');
Route::get('contact', [PagesController::class , 'getContact'])->name('contact');
Route::get('calendar', [PagesController::class , 'getCalendar'])->name('calendar');
Route::get('streams', [PagesController::class , 'getStreams'])->name('streams');
Route::get('blog', [BlogController::class , 'getBlogs'])->name('blogs');
Route::get('blog/{id}', [BlogController::class , 'getSingleBlog'])->name('singleBlog');
Route::get('search', [BlogController::class , 'getSearch'])->name('search.get');
//Landing Page Stuff
Route::get('products/{filter_type?}/{filter_value?}', [ProductController::class , 'getAll'])->name('products');
Route::prefix('subjects')->group(function(){
    Route::get('all', [SubjectController::class , 'getAll'])->name('AllSubjects.get');
});
Route::prefix('books')->group(function(){
    Route::get('all', [BookController::class , 'getAllBooks'])->name('books.all');
    Route::get('single/{id}', [BookController::class , 'getSingleBook'])->name('books.single');
});
Route::prefix('audios')->group(function(){
    Route::get('all', [AudioController::class , 'getAllAudios'])->name('audios.all');
    Route::get('single/{id}', [AudioController::class , 'getSingleAudio'])->name('audios.single');
});
Route::prefix('articles')->group(function(){
    Route::get('all', [ArticleController::class , 'getAllArticles'])->name('articles.all');
    Route::get('single/{id}', [ArticleController::class , 'getSingleArticle'])->name('articles.single');
});
Route::prefix('videos')->group(function(){
    Route::get('all', [VideoController::class , 'getAllVideos'])->name('videos.all');
    Route::get('single/{id}', [VideoController::class , 'getSingleVideo'])->name('videos.single');
});
Route::middleware('guest')->group(function () {
    Route::get('login', [UserController::class , 'getLogin'])->name('login.get');
    Route::post('login', [UserController::class , 'postLogin'])->name('login.post');
    Route::get('register', [UserController::class , 'getRegister'])->name('register.get');
    Route::post('register', [UserController::class , 'postRegister'])->name('register.post');
        //Social Signup System
    Route::get('social-login/{provider}', [UserController::class , 'redirectToProvider'])->name('login.social');
    Route::get('login/{driver}/callback', [UserController::class , 'handleProviderCallback'])->name('login.social.callback');
});
Route::middleware('auth')->group(function () {
    Route::get('profile', [UserController::class , 'profile'])->name('profile');
    Route::post('profile/edit', [UserController::class , 'postEditProfile'])->name('profile.postEdit');
    Route::post('reset-profile-password', [UserController::class , 'postResetPassword'])->name('profile.postResetPassword');
    Route::get('logout', [UserController::class , 'logout'])->name('logout');
    Route::post('comment/{id}/{resource}', [CommentController::class , 'postComment'])->name('comment.post');
    Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function(){
        Route::get('/', [AdminController::class , 'getIndex'])->name('admin.home');
        Route::get('calender', [AdminController::class , 'getAllCalendars'])->name('admin.calender.index');
        Route::prefix('calender')->group(function(){
            Route::get('/', [AdminController::class , 'getAllCalendars'])->name('admin.calender.index');
            Route::get('new', [AdminController::class , 'getCreateEvent'])->name('admin.calender.events.new.get');
            Route::post('new', [AdminController::class , 'postCreateEvent'])->name('admin.calender.events.new.post');
            Route::get('edit/{id}', [AdminController::class , 'getEditEvent'])->name('admin.calender.events.edit.get');
            Route::post('edit/{id}', [AdminController::class , 'postEditEvent'])->name('admin.calender.events.edit.post');
            Route::get('delete/{id}', [AdminController::class , 'deleteEvent'])->name('admin.calender.events.delete');
        });
        Route::prefix('product')->group(function(){
            Route::get('/', [ProductController::class , 'getAdminProducts'])->name('admin.products.all');
            Route::get('new', [ProductController::class , 'getCreateProduct'])->name('admin.product.getCreate');
            Route::post('new', [ProductController::class , 'postCreateProduct'])->name('admin.product.postCreate');
        });
        Route::prefix('blog')->group(function(){
            Route::get('/', [BlogController::class , 'getAdminBlogs'])->name('admin.blogs.all');
            Route::get('new', [BlogController::class , 'getCreateBlog'])->name('admin.blog.getCreate');
            Route::post('new', [BlogController::class , 'postCreateBlog'])->name('admin.blog.postCreate');
            Route::get('edit/{id}', [BlogController::class , 'getEditBlog'])->name('admin.blog.getEdit');
            Route::post('edit/{id}', [BlogController::class , 'postEditBlog'])->name('admin.blog.postEdit');
            Route::get('delete/{id}', [BlogController::class , 'deleteBlog'])->name('admin.blog.delete');
        });
        Route::prefix('category')->group(function(){
            Route::get('/', [CategoryController::class , 'getAllCategories'])->name('admin.category.all');
            Route::get('new', [CategoryController::class , 'getCreateCategory'])->name('admin.category.getCreate');
            Route::post('new', [CategoryController::class , 'postCreateCategory'])->name('admin.category.postCreate');
            Route::get('edit/{id}', [CategoryController::class , 'getEditCategory'])->name('admin.category.getEdit');
            Route::post('edit/{id}', [CategoryController::class , 'postEditCategory'])->name('admin.category.postEdit');
            Route::get('delete/{id}', [CategoryController::class , 'deleteCategory'])->name('admin.category.delete');
        });
        Route::prefix('resource')->group(function(){
            Route::get('/{type}', [ResourceController::class , 'getAllResources'])->name('admin.resource.all');
            Route::get('new/{type}', [ResourceController::class , 'getCreateResource'])->name('admin.resource.getCreate');
            Route::post('new/{type}', [ResourceController::class , 'postCreateResource'])->name('admin.resource.postCreate');
            Route::get('edit/{id}/{type}', [ResourceController::class , 'getEditResource'])->name('admin.resource.getEdit');
            Route::post('edit/{id}/{type}', [ResourceController::class , 'postEditResource'])->name('admin.resource.postEdit');
            Route::get('delete/{id}', [ResourceController::class , 'deleteResource'])->name('admin.resource.delete');
        });
        Route::prefix('book')->group(function(){
            Route::get('/', [BookController::class , 'getAdminBooks'])->name('admin.book.all');
            Route::get('new', [BookController::class , 'getCreateBook'])->name('admin.book.getCreate');
            Route::post('new', [BookController::class , 'postCreateBook'])->name('admin.book.postCreate');
            Route::get('edit/{id}', [BookController::class , 'getEditBook'])->name('admin.book.getEdit');
            Route::post('edit/{id}', [BookController::class , 'postEditBook'])->name('admin.book.postEdit');
            Route::get('delete/{id}', [BookController::class , 'deleteBook'])->name('admin.book.delete');
        });
        Route::prefix('article')->group(function(){
            Route::get('/', [ArticleController::class , 'getAdminArticles'])->name('admin.article.all');
            Route::get('new', [ArticleController::class , 'getCreateArticle'])->name('admin.article.getCreate');
            Route::post('new', [ArticleController::class , 'postCreateArticle'])->name('admin.article.postCreate');
            Route::get('edit/{id}', [ArticleController::class , 'getEditArticle'])->name('admin.article.getEdit');
            Route::post('edit/{id}', [ArticleController::class , 'postEditArticle'])->name('admin.article.postEdit');
            //Article Delete
            Route::get('delete/{id}', [ArticleController::class , 'deleteArticle'])->name('admin.article.delete');
        });
        Route::prefix('audio')->group(function(){
            Route::get('/', [AudioController::class , 'getAdminAudios'])->name('admin.audio.all');
            Route::get('new', [AudioController::class , 'getCreateAudio'])->name('admin.audio.getCreate');
            Route::post('new', [AudioController::class , 'postCreateAudio'])->name('admin.audio.postCreate');
            Route::get('edit/{id}', [AudioController::class , 'getEditAudio'])->name('admin.audio.getEdit');
            Route::post('edit/{id}', [AudioController::class , 'postEditAudio'])->name('admin.audio.postEdit');
            Route::get('delete/{id}', [AudioController::class , 'deleteAudio'])->name('admin.audio.delete');
        });
        Route::prefix('video')->group(function(){
            Route::get('/', [VideoController::class , 'getAdminVideos'])->name('admin.video.all');
            Route::get('new', [VideoController::class , 'getCreateVideo'])->name('admin.video.getCreate');
            Route::post('new', [VideoController::class , 'postCreateVideo'])->name('admin.video.postCreate');
            Route::get('edit/{id}', [VideoController::class , 'getEditVideo'])->name('admin.video.getEdit');
            Route::post('edit/{id}', [VideoController::class , 'postEditVideo'])->name('admin.video.postEdit');
            Route::get('delete/{id}', [VideoController::class , 'deleteVideo'])->name('admin.video.delete');
        });
        Route::prefix('fatawa')->group(function(){
            Route::get('/', [FatawaController::class , 'getAllFatawas'])->name('admin.fatawa.all');
            Route::get('new', [FatawaController::class , 'getCreateFatawa'])->name('admin.fatawa.getCreate');
            Route::post('new', [FatawaController::class , 'postCreateFatawa'])->name('admin.fatawa.postCreate');
            Route::get('edit/{id}', [FatawaController::class , 'getEditFatawa'])->name('admin.fatawa.getEdit');
            Route::post('edit/{id}', [FatawaController::class , 'postEditFatawa'])->name('admin.fatawa.postEdit');
            Route::get('delete/{id}', [FatawaController::class , 'deleteFatawa'])->name('admin.fatawa.delete');
        });
        Route::prefix('author')->group(function(){
            Route::get('/', [AuthorController::class , 'getAllAuthors'])->name('admin.author.all');
            Route::get('new', [AuthorController::class , 'getCreateAuthor'])->name('admin.author.getCreate');
            Route::post('new', [AuthorController::class , 'postCreateAuthor'])->name('admin.author.postCreate');
            Route::get('edit/{id}', [AuthorController::class , 'getEditAuthor'])->name('admin.author.getEdit');
            Route::post('edit/{id}', [AuthorController::class , 'postEditAuthor'])->name('admin.author.postEdit');
            Route::get('delete/{id}', [AuthorController::class , 'deleteAuthor'])->name('admin.author.delete');
        });
        Route::prefix('source')->group(function(){
            Route::get('/', [SourceController::class , 'getAllSources'])->name('admin.source.all');
            Route::get('new', [SourceController::class , 'getCreateSource'])->name('admin.source.getCreate');
            Route::post('new', [SourceController::class , 'postCreateSource'])->name('admin.source.postCreate');
            Route::get('edit/{id}', [SourceController::class , 'getEditSource'])->name('admin.source.getEdit');
            Route::post('edit/{id}', [SourceController::class , 'postEditSource'])->name('admin.source.postEdit');
            Route::get('delete/{id}', [SourceController::class , 'deleteSource'])->name('admin.source.delete');
        });
        Route::prefix('contacts')->group(function(){
            Route::get('/', [AdminController::class , 'getAdminContacts'])->name('admin.contacts.all');
            Route::get('show/{id}', [CategoryController::class , 'getShowContact'])->name('admin.contacts.getShow');
            Route::get('delete/{id}', [CategoryController::class , 'deleteContact'])->name('admin.contacts.delete');
        });
        Route::prefix('comments')->group(function(){
            Route::get('/', [CommentController::class , 'getAdminComments'])->name('admin.comments.all');
            Route::get('single-blog/{id}', [CommentController::class , 'getShowBlogComments'])->name('admin.blog.comments');
            Route::get('activate/{id}', [CommentController::class , 'getActivateComment'])->name('admin.comment.activate');
            Route::get('delete/{id}', [CommentController::class , 'deleteComment'])->name('admin.comment.delete');
        });
        Route::prefix('streams')->group(function(){
            Route::get('all', [AdminController::class , 'getAdminStreams'])->name('admin.stream.all');
            Route::get('new', [AdminController::class , 'getCreateStream'])->name('admin.stream.getCreate');
            Route::post('new', [AdminController::class , 'postCreateStream'])->name('admin.stream.postCreate');
            Route::get('edit/{id}', [AdminController::class , 'getEditStream'])->name('admin.stream.getEdit');
            Route::post('edit/{id}', [AdminController::class , 'postEditStream'])->name('admin.stream.postEdit');
            Route::post('delete/{id}', [AdminController::class , 'deleteStream'])->name('admin.stream.delete');
        });
    });
});
