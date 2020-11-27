<?php

namespace App\Admin\Controllers;

use App\Models\VariationOption;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Variation;

class VariationOptionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'VariationOption';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VariationOption());

        $grid->column('id', __('Id'));
        $grid->column('variation_option_name', __('Variation option name'));
        $grid->column('variation_id', __('Variation id'));
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
        $show = new Show(VariationOption::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('variation_option_name', __('Variation option name'));
        $show->field('variation_id', __('Variation id'));
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
        $form = new Form(new VariationOption());

        $form->text('variation_option_name', __('Variation option name'));
        $form->select('variation_id', __('Variation id'))->options(Variation::all()->pluck('variation_name', 'id'));

        return $form;
    }
}
