<?php
// PaysController.php

namespace App\Controller;

use App\Document\Country;
use App\Form\CountryType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


class CountryController extends AbstractController
{
    
    #[Route('/country', methods: ['POST'])]
     
    public function addPays(Request $request, DocumentManager $dm): JsonResponse
    {
        $country = new Country();
        $form = $this->createForm(CountryType::class, $country);
        $form->submit(json_decode($request->getContent(), true));

        if ($form->isSubmitted() && $form->isValid()) {
            $dm->persist($country);
            $dm->flush();

            return $this->json($country, 201);
        }

        return $this->json($form->getErrors(true), 400);
    }
}
  ?>