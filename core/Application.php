<?php
    namespace app\core;
        use app\models\User;

        class Application
        {


            public static string $ROOT_DIR;

            public string $layout = 'main';
            public string $userClass;
            public Router $router;
            public Request $request;
            public Response $response;
            public Database $db;
            public static Application $app;
            public ?Controller $controller = null;
            public Session $session;
            public View $view;
            public ?DbModel $user;
            public function __construct($rootDir,array $config)
            {
                $this->userClass = $config['userClass'];
                self::$ROOT_DIR = $rootDir;
                self::$app = $this;
                $this->request = new Request();
                $this->response = new Response();
                $this->router = new Router($this->request,$this->response);
                $this->db = new Database($config['db']);
                $this->session = new Session();
                $this->view = new View();

                $primaryValue = $this->session->get('user');
                if($primaryValue){
                    $user =new $this->userClass();
                    $primaryKey = $user->primaryKey();
                    $this->user = $user->findOne([$primaryKey=>$primaryValue]);

                }else{
                    $this->user = null;
                }


            }

            public static function isGuest()
            {
                return !self::$app->user;
            }

            public function run()
            {
                try {
                    echo $this->router->resolve();
                }catch(\Exception $e){
                   echo $this->view->renderView('_error',[
                       'exception' => $e
                   ]);
                }

            }

            /**
             * @return Controller
             */
            public function getController(): Controller
            {
                return $this->controller;
            }

            /**
             * @param Controller $controller
             */
            public function setController(Controller $controller): void
            {
                $this->controller = $controller;
            }

            public function login(DbModel $user)
            {

                $this->user = $user;
                $primarykey = $user->primaryKey();
                $primaryValue = $user->{$primarykey};
                $this->session->set('user',$primaryValue);
                return true;
            }

            public function logout()
            {
                $this->user = null;
                $this->session->remove('user');
            }

        }
