<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderSuccesController extends AbstractController
{
 
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/commande/merci/{stripSessionId}', name: 'app_order_validate')]
    public function index(Cart $cart, $stripSessionId): Response
    {
        $order = $this->entityManager->getRepository( Order::class)->findOneByStripSessionId($stripSessionId);

        if(!$order || $order->getUser() != $this->getUser())  {
            return $this->redirectToRoute('home');
        }
        
        if ($order->getState() == 0) {
            $cart->remove();

            $order->setState(1);
            $this->entityManager->flush();

            $mail = new Mail();
            $content= "Bonjour".$order->getUser()->getFirtsname()."<br>Merci pour votre commande.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mollis efficitur odio sit amet efficitur. Vestibulum sit amet vestibulum leo, sit amet vehicula erat. Nunc et elementum turpis. In hac habitasse platea dictumst. Etiam suscipit sit amet dolor in faucibus. In tempus dapibus erat vel dignissim. In nec mollis mi.";
            $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirtsname(), 'Votre commande La Boutique Française est bien validée', $content);
        }

        
        return $this->render('order_success/index.html.twig', [
            'order' =>$order
        ]);
    }
}
