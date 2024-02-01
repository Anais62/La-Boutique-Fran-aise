<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/inscription', name: 'app_register')]
     
    public function index(Request $request, UserPasswordHasherInterface $encoder): Response
    {
        $notification = null;
        
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $search_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());

            if (!$search_email) {
                
                $password = $encoder->hashPassword($user, $user->getPassword());
                $user->setPassword($password);

                            
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                $mail = new Mail();
                $content= "Bonjour".$user->getFirtsname()."<br>Bienvenue sur la première boutique dédiée au made in France.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mollis efficitur odio sit amet efficitur. Vestibulum sit amet vestibulum leo, sit amet vehicula erat. Nunc et elementum turpis. In hac habitasse platea dictumst. Etiam suscipit sit amet dolor in faucibus. In tempus dapibus erat vel dignissim. In nec mollis mi.";
                $mail->send($user->getEmail(), $user->getFirtsname(), 'Bienvenue sur la La Boutique Française', $content);
               
                $notification = "Inscription Réussi !";

            }else{
                
                $notification = "L'email que vous avez renseigné existe déjà.";
            }

        }


        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
