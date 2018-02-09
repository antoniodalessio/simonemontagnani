<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageContent;

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
        
        $content = PageContent::where(['slug' => $pageName, 'lang' => $lang])->first();

        if (!isset($content)) {
            return abort(404);
        }else{
            $template = $content->page->template;
        }

        return view($template)->with('page', $content);
    }
}
