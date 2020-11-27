<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductCombination;
use App\Models\ProductVariationOption;
use App\Models\ProductVariationOptionValue;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductCombinationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductCombination';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductCombination());

        $grid->column('id', __('Id'));
        $grid->column('combination_string', __('Combination string'));
        $grid->column('unique_string_id', __('Unique string id'));
        $grid->column('price', __('Price'));
        $grid->column('product_id', __('Product id'));
        $grid->column('sku', __('Sku'));
        $grid->column('available_stock', __('Available stock'));
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
        $show = new Show(ProductCombination::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('combination_string', __('Combination string'));
        $show->field('unique_string_id', __('Unique string id'));
        $show->field('price', __('Price'));
        $show->field('product_id', __('Product id'));
        $show->field('sku', __('Sku'));
        $show->field('available_stock', __('Available stock'));
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
        $form = new Form(new ProductCombination());

        // $form->text('combination_string', __('Combination string'));
        $form->select('product_id', __('Product id'))->options(Product::all()->pluck('product_name', 'id'));
        $form->multipleSelect('combination_string', __('Combination string'))->options(ProductVariationOptionValue::all()->pluck('product_variation_value_name', 'product_variation_value_name'));
        // $form->text('unique_string_id', __('Unique string id'));
        $form->decimal('price', __('Price'));
        $form->text('sku', __('Sku'));
        $form->number('available_stock', __('Available stock'));
        // $form->saving(function (Form $form) {
        //     $form->combination_string =implode("-",$form->set_combination_string);
        //     // dd($form->combination_string);
        //     // json_encode($form->combination_string);
        // });

        $form->number('stock.total_stock', __('Total Stock'));
        $form->number('stock.unit_price', __('Unit Price'));
        return $form;
    }
}
