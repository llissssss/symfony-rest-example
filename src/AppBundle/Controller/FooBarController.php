<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\BrowserKit\Request;


class FooBarController extends FOSRestController implements ClassResourceInterface
{
    /**
     * DELETE Route annotation.
     * @Delete("/dept/{id}")
     */
    public function methodToDeleteAResourceAction(Request $request, $id)
    {

    }

    /**
     * DELETE Route annotation.
     * @Delete("/dept/{deptId}/emp{id}")
     */
    public function methodToDeleteASubResourceAction(Request $request, $deptId, $id)
    {

    }
}
