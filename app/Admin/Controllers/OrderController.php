<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('transaction_id', __('Transaction id'));
        $grid->column('user_id', __('User id'));
        $grid->column('address', __('Address'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('items', __('Items'));
        $grid->column('ref_number', __('Ref number'));
        $grid->column('order_notes', __('Order notes'));
        $grid->column('transport_cost', __('Transport cost'));
        $grid->column('order_status', __('Order status'));
        $grid->column('city_town', __('City town'));
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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('transaction_id', __('Transaction id'));
        $show->field('user_id', __('User id'));
        $show->field('address', __('Address'));
        $show->field('mobile', __('Mobile'));
        $show->field('items', __('Items'));
        $show->field('ref_number', __('Ref number'));
        $show->field('order_notes', __('Order notes'));
        $show->field('transport_cost', __('Transport cost'));
        $show->field('order_status', __('Order status'));
        $show->field('city_town', __('City town'));
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
        $form = new Form(new Order());

        $form->number('transaction_id', __('Transaction id'));
        $form->number('user_id', __('User id'));
        $form->textarea('address', __('Address'));
        $form->mobile('mobile', __('Mobile'));
        $form->textarea('items', __('Items'));
        $form->text('ref_number', __('Ref number'));
        $form->textarea('order_notes', __('Order notes'));
        $form->decimal('transport_cost', __('Transport cost'));
        $form->text('order_status', __('Order status'));
        $form->text('city_town', __('City town'));

        return $form;
    }
}
