<?php


namespace Tests;

use AltoRouter;
use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /**
     * @var Router
     */
    private $router;
    private $viewPath = 'GET';

    public function setUp(): void
    {
        $this->viewPath;
        $this->router = new Router($this->viewPath);
    }

    public function testGet()
    {
        $response = $this->router->get('/blog', 'demo/demo', '/blog');
        $this->assertEquals($this->router, $response);
    }

    /*public function testRun()
    {
        $request = new AltoRouter();
        $match = $request->match();
        $view = $match['target'];
        $this->assertEquals($view, $request->getRoutes());

    }*/
}