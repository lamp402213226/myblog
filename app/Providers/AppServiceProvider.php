<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Admin\CatesController;
use App\Http\Controllers\Admin\LabelsController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 共享 分类数据
        view()->share('common_cates_data', CatesController::getCates());
        // 共享 标签数据
        view()->share('common_labels_data', LabelsController::getLabels());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
