<?php

namespace App\Admin\Controllers;

use App\Models\ProductVariationOption;
use App\Models\Variation;
use App\Models\VariationOption;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductVariationOptionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductVariationOption';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductVariationOption());

        $grid->column('id', __('Id'));
        $grid->column('product_id', __('Product id'));
        $grid->column('product_variation_name', __('Product variation name'));
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
        $show = new Show(ProductVariationOption::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_id', __('Product id'));
        $show->field('product_variation_name', __('Product variation name'));
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
        $form = new Form(new ProductVariationOption());

        $form->select('product_id', __('Product id'))->options(Product::all()->pluck('product_name', 'id'));
        $form->select('product_variation_name', __('Product variation name'))->options(Variation::all()->pluck('variation_name', 'variation_name'));

        $form->hasMany('product_option_values', 'Product Variations Options', function (Form\NestedForm $form) {
            $form->select('product_variation_value_name', __('Product variation value name'))->options(VariationOption::all()->pluck('variation_option_name', 'variation_option_name'));
        });
        return $form;
    }
}
