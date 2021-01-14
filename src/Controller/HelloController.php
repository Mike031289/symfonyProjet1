<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
	//La classe HelloController va hériter de toutes les méthodes definies dans AbstractController 
Class HelloController extends AbstractController{
	/**
	 * @Route("hello");
	 */
	 public function hello(){
			
	return $this->render("hello.html.twig");
		}
		
	/**
	 * @Route("hello/{name}", name="HelloWithName");
	 */
	 public function helloWithName($name){
			
	return new Response("hello ".$name);
		}
		
}




