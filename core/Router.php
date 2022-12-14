<?php

 namespace app\core;

    use app\core\exception\NotFoundException;

    class Router
    {
        public Request $request;
        protected array $routes = [];
        public Response $response;

        /**
         * @param Request $request
         */
        public function __construct(Request $request,Response $response)
        {
            $this->request = $request;
            $this->response = $response;
        }


        public function get($path,$callback)
        {
            $this->routes['get'][$path] = $callback;
        }

        public function post($path,$callback)
        {
            $this->routes['post'][$path] = $callback;
        }



        public function resolve()
        {
            $path = $this->request->getPath();
            $method = $this->request->Method();
            $callback = $this->routes[$method][$path] ?? false;
            if($callback === false) {

                $this->response->setStatusCode(404);
                throw new NotFoundException();
//                return $this->renderView("_404");

            }
            
            if(is_string($callback)){

                return Application::$app->view->renderView($callback);
            }

            if(is_array($callback)) {

                /** @var Controller $controller */
                $controller = new $callback[0]();

                  Application::$app->controller = $controller;

                $controller->action = $callback[1];
                foreach ($controller->getMiddlewares() as $middleware ) {
                    $middleware->execute();
                }
                $callback[0] = Application::$app->controller;
            }

            return call_user_func($callback,$this->request,$this->response);

        }


    }