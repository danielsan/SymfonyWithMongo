<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\StoreBundle\Document\Product;
use Acme\StoreBundle\Document\Tag;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }


/**
 * @Route("/create_a_document")
 */
public function createAction()
{
    $product = new Product();
    $product->setName('A Foo Bar');
    $product->setPrice('19.99');

    $tagLala = new Tag();
    $tagLala->setTag('lala');
    $product->addTag($tagLala);

    $tagLele = new Tag();
    $tagLele->setTag('lele');
    $product->addTag($tagLele);


    $dm = $this->get('doctrine_mongodb')->getManager();
    $dm->persist($product);
    $dm->flush();

    return new Response('Created product id '.$product->getId());
}    

}
