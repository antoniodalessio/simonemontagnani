<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Menu;
use App\Settings;

class ProjectController extends Controller
{
    

    public function index($projectName = 'test')
    {   
        $page = new \stdClass;
        $page->meta_title = "";
        $page->meta_description = "";
        $page->name = "";
        $page->menu = Menu::all();
        $page->page_id = 0;
        $page->settings = Settings::find(1);


        return view('portfolio')->with('page', $page);
    }

}
