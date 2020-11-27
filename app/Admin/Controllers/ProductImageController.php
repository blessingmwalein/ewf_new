<?php

namespace App\Admin\Controllers;

use App\Models\ProductImage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductImage());

        $grid->column('id', __('Id'));
        $grid->column('image_gallery_id', __('Image gallery id'));
        $grid->column('product_variation_value_id', __('Product variation value id'));
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
        $show = new Show(ProductImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image_gallery_id', __('Image gallery id'));
        $show->field('product_variation_value_id', __('Product variation value id'));
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
        $form = new Form(new ProductImage());

        $form->number('image_gallery_id', __('Image gallery id'));
        $form->number('product_variation_value_id', __('Product variation value id'));

        return $form;
    }
}
