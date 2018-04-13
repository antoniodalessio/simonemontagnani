<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageContent;
use App\Settings;
use App\PagesImages;

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


        if (!isset($page)) {
            return abort(404);
        }else{
            $template = $page->template()->first()->template;
        }

        $settings = Settings::find(1);

        $images = $page->images()->get()->sortBy('ord');
        $page = $page->contents()->first();
        $page->settings = $settings;


        $page->images = $images;


        return view($template)->with('page', $page);
    }
}
