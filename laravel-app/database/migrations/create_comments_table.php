<?php 
Schema::create('comments', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('post_id');
    $table->unsignedBigInteger('user_id');
    $table->text('body');
    $table->timestamps();

    $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});
?>