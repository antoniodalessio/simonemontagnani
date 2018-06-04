<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageContent;
use App\Settings;
use App\PagesImages;
use App\Menu;
use App\Projects;
use App\ProjectTypes;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLocal($lang = "it", $pageName = 'home')
    {
        return $this->getPage($lang, $pageName);
    }

    public function index($pageName = 'home')
    {   
        $lang = $_ENV['DEFAULT_LOCALIZATION'];
        return $this->getPage($lang, $pageName);
    }

    public function getPage($lang, $pageName) {

        $page = 
            Page::where(["active" => "1"])
                ->whereHas("contents", function($q) use ($pageName, $lang){
                    $q
                    ->where(['slug' => $pageName])
                    ->whereHas('langs', function($q) use ($lang) {
                        $q->where('name', $lang);
                    });
                })->get()->first();


        if (!isset($page) || $page->active == 0) {
            return abort(404);
        }else{
            $temp = $page->template()->first();
            $template = $temp->template;
            $templateid = $temp->id;
        }

        

        $page->page_id = $page->id;
        $pageName = $page->name;

        if ($page->imagesections) {
            $imagesections = $page->imagesections;
        }

        $images = $page->images()->get()->sortBy('ord');
        $page = $page->contents()->first();

        $settings = Settings::find(1);
        $page->settings = $settings;


        if ($templateid == 5) {
            $projectType = ProjectTypes::where('type', '=', $pageName)->get();

            $page->projects = 
                Projects::where('type_id', '=', 2)
                            ->where('active', '=', 1)
                            ->whereHas('type', function($q) use ($projectType){
                                $q->where('type_id', '=', $projectType->first()->id);
                            })
                            ->get();
        }


        $page->images = $images;

        $page->menu = Menu::orderBy('order')->get();

        $page->template = $template;
        $page->imagesections = $imagesections;

        return view($template)->with('page', $page);
    }

}
