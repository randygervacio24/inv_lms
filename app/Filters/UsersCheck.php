<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UsersCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = service('uri');
        if($uri->getSegment(1)== 'users'){
          if($uri->getSegment(2)== '')
            $segment= 'userLogin';
          else
            $segment='userLogin'.$uri->getSegment(2);

        return redirect()->to($segment);


      }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
