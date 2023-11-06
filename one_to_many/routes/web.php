<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;


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

Route::get('/', function () {
    $post = Post::find(1);

    $comment = new Comment;
    $comment->comment = "Hi this is a comment";

    $post = $post->comments()->save($comment);
    return "saved!";
});

Route::get('/post', function () {
$comment = Comment::find(1);
$post = Post::find(2);

$comment->post()->associate($post)->save();
return "done";
});

Route::get('/comment', function () {

    $post = Post::find(4);

    $comment1 = new Comment;
    $comment1->comment = "Hi Comment 1";

    $comment2 = new Comment;
    $comment2->comment = "Hi Comment 2";

    $post = $post->comments()->saveMany([$comment1, $comment2]);
    return "done";

});