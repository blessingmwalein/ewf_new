<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('category_name', __('Category name'));
        $grid->column('category_slug', __('Category slug'));
        $grid->column('category_icon', __('Category icon'))->image(env('APP_URL').'/storage', 50, 50);
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_name', __('Category name'));
        $show->field('category_slug', __('Category slug'));
        $show->field('category_icon', __('Category icon'));
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
        $form = new Form(new Category());

        $form->text('category_name', __('Category name'));
        // $form->text('category_slug', __('Category slug'));
        $form->image('category_icon', __('Category icon'));
        $form->hasMany('sub_categories', 'Sub Categories', function (Form\NestedForm $form) {
            $form->text('sub_category_name', __('Sub category name'));
            $form->image('sub_category_icon', __('Sub category icon'));
        });

        
        
        return $form;
    }
}
