<?php

namespace App\Admin\Controllers;

use App\Models\ProductCombination;
use App\Models\ProductStock;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductStockController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductStock';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductStock());

        $grid->column('id', __('Id'));
        $grid->column('total_stock', __('Total stock'));
        $grid->column('unit_price', __('Unit price'));
        $grid->column('product_combination_id', __('Product combination id'));
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
        $show = new Show(ProductStock::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('total_stock', __('Total stock'));
        $show->field('unit_price', __('Unit price'));
        $show->field('product_combination_id', __('Product combination id'));
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
        $form = new Form(new ProductStock());

        $form->number('total_stock', __('Total stock'));
        $form->decimal('unit_price', __('Unit price'));
        $form->select('product_combination_id', __('Product combination id'))->options(ProductCombination::all()->pluck('combination_string', 'id'));

        return $form;
    }
}
