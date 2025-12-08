<?php

namespace App\Admin\Controllers;

use App\Models\Experience;
use App\Models\Technology;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TechnologyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Technology controller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Technology);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Title'))->sortable();
        $grid->column('icon', __('Icon'))->image('/storage/');

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
        $show = new Show(Technology::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('title', __('Title'));
        $show->field('icon', __('Icon'))->image('/storage/');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Technology);

        $form->display('id', __('ID'));
        $form->text('title', __('Title'));
        $form->image('icon', __('Icon'));

        return $form;
    }
}
