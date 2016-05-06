<?php

namespace AppBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use AppBundle\Entity\Department;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DepartmentController extends FOSRestController implements ClassResourceInterface
{

    public function cgetAction(Request $request)
    {
        $all = $this->getDoctrine()->getRepository(Department::class)->findAll();
        /** @var Serializer $serializer */
        $serializer = $this->get('serializer');

        $jsonContent = $serializer->serialize($all, 'json', ['groups' => ['group1']]);

        return $jsonContent;
    }

    public function postAction(Request $request)
    {
        var_dump($request->getContent());

        /** @var Serializer $serializer */
        $serializer = $this->get('serializer');
        $entity = $serializer->deserialize($request->getContent(), Department::class, 'json', ['groups' => ['group1']]);
        var_dump($entity);
        return [];
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
