<?php
/**
 * Created by PhpStorm.
 * User: Banban
 * Date: 01/04/2017
 * Time: 16:07
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    /**
     * @Route("/add", name="addProduct")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction()
    {
        // on crée un produit
        $product = new Product();

        // on récupère le formulaire
        $form = $this->createForm(ProductType::class, $product);

        // on génère le HTML du formulaire créé
        $formView = $form->createView();

        // on rend la vue
        return $this->render('productAdd.html.twig', array('form'=>$formView));
    }
}