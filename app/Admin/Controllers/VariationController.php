<?php

namespace App\Admin\Controllers;

use App\Models\Variation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VariationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Variation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Variation());

        $grid->column('id', __('Id'));
        $grid->column('variation_name', __('Variation name'));
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
        $show = new Show(Variation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('variation_name', __('Variation name'));
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
        $form = new Form(new Variation());

        $form->text('variation_name', __('Variation name'));

        $form->hasMany('variation_options', 'Variation Option', function (Form\NestedForm $form) {
            $form->text('variation_option_name');
        });
        
        return $form;
    }
}
