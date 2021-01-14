<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
Class UserController extends AbstractController{
  /**
    * @Route("/user");
	*/
     function createUserForm(){
         $user=new User();
         $form=$this->createFormBuilder($user)
                ->add('name')
                ->add('email')
                ->add('date')
                ->getForm();
         return $this->render('form.html.twig', ['form'=>$form->createView()]);
     }
    
}