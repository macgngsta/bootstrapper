<?php
namespace Bootstrapper;

use Illuminate\Support\ServiceProvider;

class BootstrapperServiceProvider extends ServiceProvider
{
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    // Manually register Basset as we need it now
    include __DIR__.'/../../../../jasonlewis/basset/src/Basset/BassetServiceProvider.php';

    $this->package('patricktalmadge/bootstrapper');
  }

  /**
   * Register assets
   *
   * @return void
   */
  public function boot()
  {
    $this->app['basset']->collection('bootstrapper', function($collection) {
      $collection->add('packages/patricktalmadge/bootstrapper/css/bootstrap.min.css');
      $collection->add('packages/patricktalmadge/bootstrapper/css/bootstrap-responsive.min.css');

      $collection->add('packages/patricktalmadge/bootstrapper/js/jquery-1.8.3.min.css');
    });
  }
}
