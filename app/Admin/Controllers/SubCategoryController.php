<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SubCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SubCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SubCategory());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('sub_category_name', __('Sub category name'));
        $grid->column('sub_category_slug', __('Sub category slug'));
        $grid->column('sub_category_icon', __('Sub category icon'))->image(env('APP_URL').'/storage', 50, 50);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SubCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('sub_category_name', __('Sub category name'));
        $show->field('sub_category_slug', __('Sub category slug'));
        $show->field('sub_category_icon', __('Sub category icon'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SubCategory());

        $form->select('category_id', __('Category id'))->options(Category::all()->pluck('category_name', 'id'));
        $form->text('sub_category_name', __('Sub category name'));
        $form->image('sub_category_icon', __('Sub category icon'));

        return $form;
    }
}
