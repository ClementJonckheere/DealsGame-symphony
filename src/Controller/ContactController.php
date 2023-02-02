<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    #[Route('/contact/submit', name: 'app_contact_submit')]
    public function handleForm(Request $request, MailerInterface $mailerInterface): Response
        {
            if ($request->isMethod('POST')) {
                dump($request->request);
                // php bin/console messenger:consume async -vv
                            
                $sender = $request->request->get('email');
                $subject = $request->request->get('subject');
                $message = $request->request->get('message');
    
                $email = (new Email())
                ->from($sender)
                ->to('contact@example.com')
                ->subject($subject)
                ->text($message);
    
                $mailerInterface->send($email);
    
            }
            return $this->render('contact/index.html.twig');
        }
}
