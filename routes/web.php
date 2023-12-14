<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/view-greeva',
    function () {
        return view('master');
    }
);

Route::get(
    '/danh-muc',
    function () {
        return view('danh_muc');
    }
);

Route::get(
    '/san-pham',
    function () {
        return view('san_pham');
    }
);

Route::get(
    '/cong-viec',
    function () {
        return view('cong_viec');
    }
);

Route::get(
    '/btvn-dsdh',
    function () {
        return view('danh_sach_dh');
    }
);
