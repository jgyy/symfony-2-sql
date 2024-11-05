<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;

class PersonController extends AbstractController
{
    #[Route('/ex01', name: 'create_table')]
    public function createTable(EntityManagerInterface $entityManager): Response
    {
        try {
            $connection = $entityManager->getConnection();

            if (!$connection->isConnected()) {
                $connection->executeQuery('SELECT 1');
            }

            $tool = new SchemaTool($entityManager);
            $classes = array(
                $entityManager->getClassMetadata(\App\Entity\Person::class)
            );

            $tool->updateSchema($classes);

            return $this->render('person/create.html.twig', [
                'message' => 'Table created successfully!',
                'status' => 'success',
                'debug_info' => [
                    'database_name' => $connection->getDatabase(),
                    'connected' => $connection->isConnected() ? 'Yes' : 'No',
                    'driver' => $connection->getDriver()->getName()
                ]
            ]);
        } catch (\Exception $e) {
            return $this->render('person/create.html.twig', [
                'message' => 'Error creating table: ' . $e->getMessage(),
                'status' => 'error',
                'debug_info' => [
                    'error_type' => get_class($e),
                    'error_message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            ]);
        }
    }
}
