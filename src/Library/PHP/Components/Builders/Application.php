<?php


namespace Velstack\PHP\Builders;


use Velstack\PHP\Http\Controller;
use Velstack\PHP\Http\Request;
use Velstack\PHP\Http\Response;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    /**
     * @return \Velstack\PHP\Http\Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param \Velstack\PHP\Http\Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public function __construct($rootDir)
    {
        self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

    }

    public function run(){
         echo $this->router->resolve();
    }


}