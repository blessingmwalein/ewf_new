<?php

namespace App\Admin\Controllers;

use App\Models\ProductVariationOptionValue;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\ProductVariationOption;
use App\Models\VariationOption;

class ProductVariationOptionValueController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductVariationOptionValue';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductVariationOptionValue());

        $grid->column('id', __('Id'));
        $grid->column('product_option_id', __('Product option id'));
        $grid->column('product_variation_value_name', __('Product variation value name'));
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
        $show = new Show(ProductVariationOptionValue::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_option_id', __('Product option id'));
        $show->field('product_variation_value_name', __('Product variation value name'));
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
        $form = new Form(new ProductVariationOptionValue());

        $form->select('product_variation_option_id', __('Product variation option id'))->options(ProductVariationOption::all()->pluck('product_variation_name', 'id'));
        $form->select('product_variation_value_name', __('Product variation value name'))->options(VariationOption::all()->pluck('variation_option_name', 'variation_option_name'));

        return $form;
    }
}
