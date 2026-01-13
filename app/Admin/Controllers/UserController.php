<?php

namespace App\Admin\Controllers;

use App\Models\Experience;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User controller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Name'))->sortable();
        $grid->column('surname', __('Surname'))->sortable();
        $grid->column('position', __('Position'))->sortable();
        $grid->column('description', __('Description'))->sortable();
        $grid->column('interests', __('Interests'))->sortable();
        $grid->column('image', __('Foto'))->image('/storage/');
        $grid->column('linkedin', __('linkedin'));
        $grid->column('xing', __('xing'));
        $grid->column('gitlab', __('gitlab'));
        $grid->column('github', __('github'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('name', __('Name'));
        $show->field('surname', __('Surname'));
        $show->field('position', __('Position'));
        $show->field('description', __('Description'));
        $show->field('interests', __('Interests'));
        $show->field('image', __('Foto'))->image('/storage/');
        $show->field('linkedin', __('linkedin'));
        $show->field('xing', __('xing'));
        $show->field('gitlab', __('gitlab'));
        $show->field('github', __('github'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->display('id', __('ID'));
        $form->text('name', __('Name'));
        $form->text('surname', __('Surname'));
        $form->text('position', __('Position'));
        $form->textarea('description', __('Description'));
        $form->textarea('interests', __('Interests'));
        $form->image('image', __('Foto'));
        $form->text('linkedin', __('linkedin'));
        $form->text('xing', __('xing'));
        $form->text('gitlab', __('gitlab'));
        $form->text('github', __('github'));

        return $form;
    }
}
