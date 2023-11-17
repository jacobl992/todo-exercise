<?php

namespace App\Controllers;

use App\Models\TodoModel;
use Psr\Http\Message\RequestInterface;
use \Slim\Http\Interfaces\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddItemController
{
    private TodoModel $model;
    private PhpRenderer $renderer;

    public function __construct(TodoModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $postData = $request->getParsedBody();
        if (isset($postData['item'])) {
            $this->model->addItem($postData['item']);
        }
        return $response->withRedirect('/todolist');
    }
}