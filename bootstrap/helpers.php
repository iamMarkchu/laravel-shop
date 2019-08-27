<?php
use Illuminate\Support\Facades\Route;

/**
 * Created by IntelliJ IDEA.
 * User: mark chu <18627032049@163.com>
 * Date: 2019/8/27
 * Time: 10:42
 */

function test_helper() {
    echo 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
