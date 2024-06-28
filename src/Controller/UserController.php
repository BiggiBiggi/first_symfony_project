<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    // ...
    #[Route('/user/notifications')]
    public function notifications(): Response
    {
        // get the user information and notifications somehow
        $user = [
            [
                'userFirstName' => '...',
                'userNotifications' => ['...', '...'],
                'userContacts' => ['...', '...', '...'],
            ]
        ];

        // the template path is the relative file path from `templates/`
        return $this->render('user/notifications.html.twig', [
            'user_first_name' => $user[0]['userFirstName'],
            'notifications' => $user[0]['userNotifications'],
            'contacts' => $user[0]['userContacts'],
        ]);
    }
}