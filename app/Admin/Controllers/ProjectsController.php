<?php

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\MessageBag;

use App\Projects;
use App\Templates;
use App\Langs;
use App\ProjectTypes;
use App\ImagesTemplates;


class ProjectsController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Progetti');
            $content->description('');
            $content->body($this->grid()->render());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('Edit project '.$id);
            $content->body($this->form($id)->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('Aggiungi una progetto');
            $content->description('');
            $content->body($this->form());
        });
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Projects::class, function (Grid $grid) {

            $grid->model()->where('type_id', '=', 2);

            $grid->id('ID')->sortable();
            $grid->name();
            $grid->column('active')->display(function($val) {
                return $val == 1 ? "<span style='color: green'>attiva</span>" : "<span style='color: red;'>non attiva</span>";
            });
            $grid->created_at();
            $grid->updated_at();

            $grid->filter(function ($filter) {
                $filter->between('created_at', 'Created Time')->datetime();
            });

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = null)
    {
        return Admin::form(Projects::class, function (Form $form) use($id) {

            $states = [
                'on'  => ['value' => 1, 'text' => 'enable', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'disable', 'color' => 'danger'],
            ];

            $form->switch("active")->states($states);

            $form->text('name')->rules('required');
            $form->hidden('type_id')->value('2');
            $templates = Templates::all();

            $langs = Langs::all();
            $types = ProjectTypes::all();
            
            $form
                ->select('type.type_id', 'type')
                ->options($types->pluck('type', 'id'));

            $form
                ->hidden('template_id', 'Template')
                ->options($templates->pluck('name', 'id'))
                ->rules('required')
                ->default('2');

            $form->divide();

            $form->hasMany('contents', 'Lingue', function (Form\NestedForm $form) use ($langs){
                
                $form
                    ->select('langs_id', 'Lingua')
                    ->options($langs->pluck('lang', 'id'))
                    ->rules('required');

                $form->text('slug')->rules('required');
                $form->text('title');
                $form->text('subtitle');
                $form->ckeditor('content');
                $form->text('meta_title');
                $form->text('meta_description');
                $form->text('meta_keywords');
            })->useTab();


            $form->hasMany('images', 'Copertine', function (Form\NestedForm $form) {
                $form->image('img')->name(function ($file) {
                    return $file->getClientOriginalName();
                });
                $form->number('ord');
            });

            $form->hasMany('imagesections', 'Immagini', function (Form\NestedForm $form) {
                $form->number('ord');

                $templates = ImagesTemplates::all();

                $form
                    ->select('type_id', 'type')
                    ->options($templates->pluck('type', 'id'));

                $form->image('img', 'immagine 1');
                $form->image('img_2', 'immagine 2');

            });


            
        });
    }
}
