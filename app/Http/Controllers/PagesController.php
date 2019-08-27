<?php
/**
 * Created by IntelliJ IDEA.
 * User: mark chu <18627032049@163.com>
 * Date: 2019/8/27
 * Time: 10:42
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root()
    {
        return view('pages.root');
    }
}
