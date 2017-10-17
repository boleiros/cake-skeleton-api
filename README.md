# CakePHP Restfull API Skeleton

I've created this repo to make easy the creation of Api's with CakePHP

## Instalation

1. git clone 
2. composer install

## What changes

### Routes
Customizable routes: By default, cake makes every function on a controller a route, that when called it returns a view.

I've changed the way that router works, making easy to create custom routes, define the request type ( get, post) and witch controller/method this route will call.


In the file config/routes.php

Example:

This route "/" will return the index method on ApiController
```$route->get('/','Api','index');```
   
This route "/user" will return the getUsers method on ApiController
```$route->get('/user','Api','getUsers');```

### Responses

On AppController I've created a function called *response* that returns a response rest (json)

By default the response returns with status code 200 with application/json, but this can be changed by parameters within the function

```
    /**
    * returns a response
     *
     * @param Array $body
     * @param integer $status
     * @param string $type
     * @return response
     */
    public function response($body, $status = 200, $type = 'application/json')
    {
        
        $this->response->body(json_encode($body));
        $this->response->statusCode($status);
        $this->response->type($type);

        return $this->response;
    }
```