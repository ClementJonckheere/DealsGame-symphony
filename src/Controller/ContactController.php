<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
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
    public function handleForm(Request $request, MailerInterface $mailer): Response
        {
            $name = $request->request->get('name');
            $telephone = $request->request->get('telephone');
            $address = $request->request->get('address');
            $email = $request->request->get('email');
            $subject = $request->request->get('subject');
            $message = $request->request->get('message');
        
            $email = (new Email())
                ->from($email)
                ->to('your-email@example.com')
                ->subject($subject)
                ->text("Name: $name\nEmail: $email\nTelephone: $telephone\nAddress: $address\n\n$message");
        
            $mailer->send($email);
        
            return new Response('Message envoyé avec succès');
        }
}
