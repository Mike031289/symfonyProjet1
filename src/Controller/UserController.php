<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
Class UserController extends AbstractController{
  /**
    * @Route("/user");
	*/
     function createUserForm(Request $request){
         $user=new User();
         $form=$this->createFormBuilder($user)
                ->add('name', TextType::class)
                ->add('email', EmailType::class)
                ->add('date', DateType::class)
                ->add('save', SubmitType::class)
                ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isvalid()){
            return new Response("formulaire Envoyé");
        }
         return $this->render('form.html.twig', ['form'=>$form->createView()]);
     }
    
}



