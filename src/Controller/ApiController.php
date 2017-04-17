<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Api Controller
 *
 * @property \App\Model\Table\ApiTable $Api
 */
class ApiController extends AppController
{

    public function index()
    {

        return $this->response('CakePHP Restfull Api Skeleton');
    }

    public function getUsers()
    {

        return $this->response([
            'id'=> 1,
            'name' => 'admin',
            'email' => 'admin@example.com'
        ]);

    }

}
