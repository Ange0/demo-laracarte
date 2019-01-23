<?php
if (! function_exists('set_rout_path')){
    function set_rout_path($root){
        return Route::is($root) ? "active": " ";
    }
}
