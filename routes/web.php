<?php
use App\mail\createEmail;
Route::get('/',[
    "as" => "root_path",
    "uses"=>"PagesControllers@home"
]);
Route::get('/about',[
    "as"=>"about_path",
    "uses"=>"PagesControllers@about"
]);
Route::get('/contact',[
    "as"=>"contact_path",
    "uses"=>"ContactController@create"
]);
Route::get('/test-email',function(){
    return new createEmail("boo","hhnnsjs@gmail","vvbvgg");
});

Route::post('/contact',[
    "as"=>"contact_path",
    "uses"=>"ContactController@store"
]);

