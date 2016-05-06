<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;

class DepartmentController extends FOSRestController implements ClassResourceInterface
{

    public function cgetAction(Request $request)
    {
        $all = $this->getDoctrine()->getRepository('AppBundle:Department')->findAll();
        return $all;
    }

    public function postAction(Request $request)
    {

    }

    public function putAction(Request $request)
    {

    }

    public function getAction(Request $request, $id)
    {

    }

    public function deleteAction(Request $request, $id)
    {

    }
}
