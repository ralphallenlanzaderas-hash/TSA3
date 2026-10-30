<?php

Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('username')->unique();
    $table->string('full_name');
    $table->string('email');
    $table->timestamps();
});
