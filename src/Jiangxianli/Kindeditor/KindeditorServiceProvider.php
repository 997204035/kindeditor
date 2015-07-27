<?php namespace Jiangxianli\Kindeditor;

use Illuminate\Support\ServiceProvider;

class KindeditorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    public function boot()
    {
        $this->package('jiangxianli/kindeditor');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $router = $this->app['router'];
        $router->post('/kindeditor/file_upload',['as'=>'kindeditor.file_upload','uses'=>'KindeditorController@fileUpload']);
        $router->post('/kindeditor/file_manager',['as'=>'kindeditor.file_manager','uses'=>'KindeditorController@fileManager']);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('kindeditor');
	}

}
