<?php
namespace App\Controller;

use App\Form\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestController extends Controller
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $product = new \App\Entity\Product();
        $form = $this->createForm(Product::class, $product);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($product);
            $em->flush();
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}