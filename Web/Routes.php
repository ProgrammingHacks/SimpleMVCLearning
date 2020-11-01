<?php

Route::set('home', function(){
    Home::CreateView('home');
    //Home::test();
});

Route::set('contact-us', function(){
    ContactUs::CreateView('contactus');
});
