# CakePHP Restfull API Skeleton

Projeto criado para facilitar criação de API's com cakephp

## Instalação

1. git clone 
2. composer install

## O que muda?


### Rotas
Rotas personalisáveis: Por padrão, o cake considera todo método em um controller como uma rota, que ao chamada irá retornar uma view.
Alterei a forma como o router do cake funciona, permitindo criar rotas personaliáveis e definir o request type, e qual controller/método essa rota irá chamar.

No arquivo config/routes.php
Ex: 

Essa rota na raiz "/" irá retornar o método index do controler ApiController
```$route->get('/','Api','index');```
   
Essa rota "/user"  irá retornar o método getUsers do controler ApiController
```$route->get('/user','Api','getUsers');```

### Responses

No AppController foi criada uma função *response* que poderá chamada para retornar uma responsta rest (formato json)

Por padrão a resposta retorna com o status code 200, e com o tipo json, mas isso pode ser alterado via parametros na função

```
/**
     * retorna uma resposta
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