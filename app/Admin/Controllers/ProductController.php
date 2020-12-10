<?php

namespace App\Admin\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Variation;
use App\Models\VariationOption;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('product_slug', __('Product slug'));
        $grid->column('description', __('Product description'));
        $grid->column('category_id', __('Category id'));
        $grid->column('sub_category_id', __('Sub category id'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('preview_image', __('Preview image'))->image(env('APP_URL').'/storage', 50, 50);
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_name', __('Product name'));
        $show->field('product_slug', __('Product slug'));
        $show->field('description', __('Product description'));
        $show->field('category_id', __('Category id'));
        $show->field('sub_category_id', __('Sub category id'));
        $show->field('brand_id', __('Brand id'));
        $show->field('preview_image', __('Preview image'));
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
        $form = new Form(new Product());

        $form->text('product_name', __('Product name'));
        // $form->text('product_slug', __('Product slug'));
        $form->textarea('description', __('Product Decsription'));
        $form->select('category_id', __('Category id'))->options(Category::all()->pluck('category_name', 'id'));
        $form->select('sub_category_id', __('Sub category id'))->options(SubCategory::all()->pluck('sub_category_name', 'id'));
        $form->select('brand_id', __('Brand id'))->options(Brand::all()->pluck('brand_name', 'id'));
        $form->image('preview_image', __('Preview image'));
        $form->hasMany('product_variation_options', 'Product Variations', function (Form\NestedForm $form) {
            $form->select('product_variation_name', __('Product variation name'))->options(Variation::all()->pluck('variation_name', 'variation_name'));
        });
        return $form;
    }
}
