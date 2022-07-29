<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController
{
      public function index():Response
      {
         
        return $this->render("index.html.twig",[
          "nombre" => "Jena"
        ]);     
      }

      public function numero():Response
      {
       
        return $this->render("numero.html.twig",[
          "numero"=> random_int(0,100)
          
        ]);     
      }

      /**
         * @Route("/otro",name="otro")
         */
        public function otro():Response
        {
            return $this->render("numero.html.twig",[
                "numero" => random_int(0,100)
            ]);
        }

      /**
         * @Route("/noticias/{id}",name="noticias")
         */
        public function noticia($id):Response
        {
            return new Response("<h1>Ejemplo de noticia con id ".$id."</h1>");
        }

      /**
         * @Route("/noticias/{id}/categoria{categoria}",name="noticias_categoria")
         */
        public function noticia_categorias($id, $categoria):Response
        {
            return new Response("<h1>Ejemplo de noticia con id ".$id." y categoria ".$categoria."</h1>");
        }
}