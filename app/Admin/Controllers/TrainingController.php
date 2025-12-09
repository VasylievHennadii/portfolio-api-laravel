<?php

namespace App\Admin\Controllers;

use App\Models\Experience;
use App\Models\Technology;
use App\Models\Training;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TrainingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Training controller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Training);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Title'))->sortable();
        $grid->column('qualification', __('Qualification'))->sortable();
        $grid->column('program_name', __('Program Name'))->sortable();
        $grid->column('date_from', __('Date From'))->sortable()->date();
        $grid->column('date_to', __('Date To'))->sortable()->date();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Training::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('title', __('Title'));
        $show->field('qualification', __('Qualification'));
        $show->field('program_name', __('Program Name'));
        $show->field('date_from', __('Date From'));
        $show->field('date_to', __('Date To'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Training);

//        $form->display('id', __('ID'));
        $form->text('title', __('Title'));
        $form->text('qualification', __('Qualification'));
        $form->text('program_name', __('Program Name'));
        $form->date('date_from', __('Date From'));
        $form->date('date_to', __('Date To'));

        return $form;
    }
}
