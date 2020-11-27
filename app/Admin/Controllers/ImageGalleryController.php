<?php

namespace App\Admin\Controllers;

use App\Models\ImageGallery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ImageGalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ImageGallery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ImageGallery());

        $grid->column('id', __('Id'));
        $grid->column('small', __('Small'));
        $grid->column('medium', __('Medium'));
        $grid->column('large', __('Large'));
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
        $show = new Show(ImageGallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('small', __('Small'));
        $show->field('medium', __('Medium'));
        $show->field('large', __('Large'));
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
        $form = new Form(new ImageGallery());

        $form->text('small', __('Small'));
        $form->text('medium', __('Medium'));
        $form->text('large', __('Large'));

        return $form;
    }
}
