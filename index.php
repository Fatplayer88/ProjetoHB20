<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$route = new Router(URL_BASE);
$route->namespace("App\Controller");

$route->group(null);
$route->get("/", "Web:home", "web.home");


$route->get("/entrar", "Web:login", "web.login");
$route->post("/entrar", "Web:login", "web.login");
$route->get("/cadastrar", "Web:register", "web.register");
$route->post("/cadastrar", "Web:register", "web.register");

// Tratamento de erros
$route->group("ops");
$route->get("/{errcode}", function ($data) {
  echo "Erro {$data['errcode']}";
  var_dump($data);
});

$route->dispatch();

if ($route->error()) {
  $route->redirect("/ops/{$route->error()}");
}
