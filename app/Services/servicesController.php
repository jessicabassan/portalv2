<?php

namespace app\Services;

class servicesController
{
	private $path = __DIR__.'/../Controller';
	private $exclude = ['baseController.php'];

	public function getController($app, $request)
	{
		$Directory = new \RecursiveDirectoryIterator($this->path);
		$Iterator = new \RecursiveIteratorIterator($Directory);
		$Regex = new \RegexIterator($Iterator, '/^.+\.php$/i', \RecursiveRegexIterator::GET_MATCH);
		foreach ($Regex->getInnerIterator() as $file) {
		    if ($file->isFile() && !in_array($file->getFileName(), $this->exclude)) {
		        $name = strtolower(str_replace('Controller', '', reset(explode('.', $file->getFileName()))));
		        
		        $controller = sprintf(
		            "app\Controller\%s\%sController",
		            ucfirst($name),
		            $name
		        );
		        
		        $app[$name] = $app->share(function () use ($app, $request, $controller) {
		            return new $controller($app, $request);
		        });
		    }
		}
	}
}