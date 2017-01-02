<?php

class Router {

  private $requestContent;

  private $host;
  private $actualRoute;
  private $page;
  public $args;

  public $isIndex = false;

  private $routes = array();

  private $vars = array();

  public function __construct($requestContent = null, $routes = array(), $vars = array()) {
    if(empty($requestContent)) {
      $this->requestContent = $_GET['req'];
    }
    $this->routes = $routes;

    $this->vars = $vars;

    $this->__getRequest();
  }

  public function __fetchError($code = 500) {

    switch ($code) {
      case 404:
        $header = '404 Not Found';
        break;
      case 403:
        $header = '403 Forbidden';
        break;

      default:
        $header = '500 Internal Server Error';
        break;
    }

    extract($this->vars);
    $request = $this->actualRoute;
    $router = $this;

    if(file_exists('pages/'.$code.'.php')) {
      header("HTTP/1.0 ".$header);
      require ROOT.DS.'pages'.DS.$code.'.php';
      exit;
    } else {
      header("HTTP/1.0 500 Internal Server Error");
      require ROOT.DS.'pages'.DS.'500.php';
      exit;
    }

  }

  private function __getRequest() {

    $request = $this->requestContent;

    $isRoute = $this->__getPage($request);

    $request = (substr($request, -1) == "/") ? substr($request, 0, -1) : $request; // On supprime le dernier slash
    $host = $_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
    $host = 'http://'.substr($host, 0, -(strlen($request)+1));
    $host = (substr($host, -1) == "/") ? $host : $host.'/';
    $this->host = $host;

    if($isRoute === false) {

      $requestExploded = explode('/', $request);

      $action = (isset($requestExploded[0]) && !empty($requestExploded[0])) ? $requestExploded[0] : 'index';
      $this->actualRoute = ($action != 'index') ? $action : '';
      $this->page = $this->actualRoute;

      if(isset($requestExploded[1])) {
        $args = $requestExploded;
        unset($args[0]);
        $args = array_values($args);
      } else {
        $args = array();
      }

      $this->args = $args;

    } else {
      list($this->actualRoute, $this->page, $this->args) = $isRoute;
    }

  }

  private function __getPage($path) {
    $routesList = $this->routes;
    if(!empty($routesList)) {

      foreach ($routesList as $route => $page) {

        $pattern = str_replace('/', '\/', $route);
        $pattern = str_replace('*', '[\s\S]', $pattern);
        $pattern = '^'.$pattern.'+$';

        if(preg_match('/'.$pattern.'/', $path)) {

          if($path[0] == "/") {
            $path = substr($path, 1);
          }

          $args = explode('/', $path);

          foreach ($args as $key => $value) {
            $page = str_replace('$'.$key, $value, $page);
          }

          return array($path, $page, $args);
        }

      }

    }
    return false;

  }

  public function dispatch($route = null) {
    if(empty($route)) {
      $action = (!empty($this->page)) ? $this->page : 'index';
    } else {
      $action = $route;
    }

    if($action == "index") {
      $this->isIndex = true;
    }

    extract($this->vars);
    $request = $this->actualRoute;
    $router = $this;

    if(file_exists(ROOT.DS.'pages'.DS.$action.'.php')) {
      require ROOT.DS.'pages'.DS.$action.'.php';
    } else {
      $this->__fetchError(404);
    }
  }

  public function is404($route) {
    $parse = parse_url($route, PHP_URL_HOST);
    if(!empty($parse)) {
      return false;
    } else {
      $isRoute = $this->__getPage($route);
      if($isRoute === false) {
        $page = $route;
      } else {
        $page = $isRoute[1];
      }
      return (!file_exists(ROOT.DS.'pages'.DS.$page.'.php'));
    }
  }

  public function getURL($route) {
    $parse = parse_url($route, PHP_URL_HOST);
    if(!empty($parse)) {
      return $route;
    } else {

      if($route[0] == "/") { // on veux la racine
        $route = substr($route, 1);
      } else {

        if(!empty($this->actualRoute)) {
          $actualRoute = $this->actualRoute;
          if(substr($actualRoute, -1) != "/") {
            $actualRoute = $actualRoute.'/';
          }
          $route = $actualRoute.$route;
        }

      }

      return $this->host.$route;

    }

  }

}
