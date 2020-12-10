<?php

namespace App\Admin\Controllers;

use App\Models\DistanceCost;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DistanceCostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'DistanceCost';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new DistanceCost());

        $grid->column('id', __('Id'));
        $grid->column('unit', __('Unit'));
        $grid->column('cost', __('Cost'));
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
        $show = new Show(DistanceCost::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('unit', __('Unit'));
        $show->field('cost', __('Cost'));
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
        $form = new Form(new DistanceCost());

        $form->text('unit', __('Unit'));
        $form->decimal('cost', __('Cost'));

        return $form;
    }
}
