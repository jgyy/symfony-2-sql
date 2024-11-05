<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Connection;

#[Route('/ex00', name: 'app_table_')]
class TableController extends AbstractController
{
    #[Route('/', name: 'create', methods: ['GET'])]
    #[Route('', name: 'create_no_slash', methods: ['GET'])]
    public function createTable(Connection $connection): Response
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS persons (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) UNIQUE,
                name VARCHAR(255),
                email VARCHAR(255) UNIQUE,
                enable BOOLEAN,
                birthdate DATETIME,
                address LONGTEXT
            )";

            $connection->executeQuery($sql);
            
            $message = 'Table created successfully!';
            $status = 'success';
            
        } catch (\Exception $e) {
            $message = 'Error creating table: ' . $e->getMessage();
            $status = 'error';
        }

        return $this->render('table/create.html.twig', [
            'message' => $message,
            'status' => $status
        ]);
    }
}
