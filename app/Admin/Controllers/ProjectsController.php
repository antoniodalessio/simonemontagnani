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
            $content->header('Templates');
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

            $grid->id('ID')->sortable();
            $grid->name();
            $grid->type();
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

            $form->select('type')->options(['lavori' => 'lavori', 'personali' => 'personali']);

            $form->image('cover');

            /*$form->hasMany('images', 'Immagini', function (Form\NestedForm $form) {
                $form->image('img');
                $form->text('ord');
            });*/

            
        });
    }
}
