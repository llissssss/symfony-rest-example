<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;

class EmployeeController extends FOSRestController implements ClassResourceInterface
{

    public function cgetAction($departmentId, Request $request)
    {
        $all = $this->getDoctrine()->getRepository('AppBundle:Department')->findAll();
        return $all;
    }

    public function postAction($departmentId, Request $request)
    {

    }

    public function putAction($departmentId, Request $request)
    {

    }

    public function getAction($departmentId, Request $request, $id)
    {

    }

    public function deleteAction($departmentId, Request $request, $id)
    {

    }
}
