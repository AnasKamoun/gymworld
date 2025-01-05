<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Offres;
use App\Entity\User;
use App\Form\ActiviteType;
use App\Form\UserType;
use App\Form\OffreType;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route(path: '/admin')]
class AdminController extends AbstractController
{
    #[Route(path: '/dashboard/consulterforfait', name: 'consulterforfait')]
    public function consulterforfait(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Offres::class);
        $offres = $repository->findAll();
        return $this->render('MainPages/admin/consulterforfait.html.twig', ['offres' => $offres]);
    }

    #[Route('/', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('MainPages/Admin/index.html.twig');
    }

    #[Route('/dashboard/horaire', name: 'consulterhoraire')]
    public function horaire(): Response
    {
        return $this->render('MainPages/admin/consulterhoraire.html.twig');
    }

    #[Route('/dashboard/activite/{id<\d{1,2}>?0}', name: 'consulteractivite')]
    public function activite(Activite        $activite = null, Request $request,
                             ManagerRegistry $repository, $id): Response
    {
        $msg = 'updated';
        if ($activite == null) {
            $msg = 'added';
            $activite = new Activite();
            $jour = $request->query->get('jour');
            if ($jour != null) $activite->setJour($jour);
            $heure = $request->query->get('heure');
            if ($heure != null) $activite->setHeureDebut($heure);
        }
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repository->getManager()->persist($activite);
            $repository->getManager()->flush();
            $this->addFlash('success', 'Activite ' . $msg . ' successfully');
            return $this->redirectToRoute('consulterhoraire');
        }
        return $this->render('MainPages/admin/changerActivite.html.twig', ['form' =>
            $form->createView(),
            'id' => $id]);
    }

    #[Route('/dashboard/activite/{id<\d{1,2}>?0}/delete', name: 'delete_activite')]
    public function deleteActivite(Activite $activite = null, EntityManagerInterface $repository): Response
    {
        if ($activite == null) {
            $this->addFlash('error', 'Activite not found');
        } else {
            $repository->remove($activite);
            $repository->flush();
            $this->addFlash('success', 'Activite deleted successfully');
        }
        return $this->redirectToRoute('consulterhoraire');
    }

    #[Route('/dashboard/clients', name: 'app_admin_dashboard_client')]
    public function admin_dashboard_client(): Response
    {
        return $this->forward('App\Controller\AdminController::admin_dashboard_client_findAll');
    }

    #[Route('/dashboard/client/findAll/{nbPers<\d+>}/{nbPage<\d+>}', name: 'app_admin_dashboard_client_findAll')]
    public function admin_dashboard_client_findAll(UserRepository $userRepository,
                                                                  $nbPers = 15, $nbPage =
                                                   1):
    Response
    {
        $clients = $userRepository->findByExampleField($nbPers, $nbPage);
        $nbTotdePages = ceil($userRepository->count() / $nbPers);
        return $this->render('MainPages/Admin/clients.html.twig', [
            'clients' => $clients,
            'nbTotPages' => $nbTotdePages,
            'nbPageActuelle' => $nbPage,
            'nbPers' => $nbPers
        ]);
    }

    #[Route('/dashboard/add', name: 'app_admin_dashboard_add')]
    public function admin_dashboard_add(Request $request): Response
    {
        return $this->forward('App\Controller\AdminController::admin_dashboard_edit', ['request' => $request]);
    }

    #[Route('/dashboard/edit/{id?0}', name: 'app_admin_dashboard_edit')]
    public function admin_dashboard_edit(User $user = null, ManagerRegistry $doctrine, Request $request): Response
    {
        $new = false;
        if (
            !$user
        ) {
            $new = true;
            $user = new User();
        }
        $form = $this->createForm(UserType::class, $user);
        $form->remove('password');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $doctrine->getManager();
            $manager->persist($user);
            $manager->flush();
            if ($new) {
                $msg = "a ete ajoute avec succes";
            } else {
                $msg = "a ete edite avec succes";
            }
            $this->addFlash('success', $user->getName() . $msg);
            return $this->redirectToRoute('app_admin_dashboard_client_findAll');
        } else {
            return $this->render('MainPages/Admin/add_or_edit_client.html.twig', ['form' => $form->createView()]);
        }
    }

    #[Route('/dashboard/client/{id}', name: 'app_admin_dashboard_client_id')]
    public function admin_dashboard_client_id($id, User $client = null): Response
    {
        if ($client == null) {
            $this->addFlash('error', 'Client avec l\'id ' . $id . ' not found');
            return $this->redirectToRoute('app_admin_dashboard_client');
        }
        $this->addFlash('success', 'Client avec l\'id ' . $id . ' found successfully');
        return $this->render('MainPages/Admin/detail_client.html.twig', [
            'client' => $client,
            'dateActuelle' => new DateTime()
        ]);
    }

    #[Route('/dashboard/client/{id?0}/edit', name: 'app_admin_dashboard_client_id_edit')]
    public function admin_dashboard_client_id_edit($id, User $client = null): Response
    {
        return $this->redirectToRoute('app_admin_dashboard_edit', ['user' => $client, 'id' => $id]);
    }

    #[Route('/dashboard/client/{id}/delete', name: 'app_admin_dashboard_client_id_delete')]
    public function admin_dashboard_client_id_delete($id,
                                                     EntityManagerInterface $registry, User $user = null): Response
    {
        if ($user != null) {
            $registry->remove($user);
            $registry->flush();
            $this->addFlash('success', 'Client with id ' . $id . ' deleted successfully');
        } else {
            $this->addFlash('error', 'Client with id ' . $id . ' not found');
        }
        return $this->redirectToRoute('app_admin_dashboard_client');
    }

    #[Route('/delete_service/{id}', name: 'delete_service')]
    public function delete_service(ManagerRegistry $doctrine, EntityManagerInterface $registry, $id): Response
    {
        $offre = $doctrine->getRepository(Offres::class)->find($id);
        if ($offre == null) {
            $this->addFlash('error', 'Offre with id ' . $id . 'is used by a ');
        } else {
            $offreClients = $offre->getOffreClients();
            if (!$offreClients->isEmpty()) {
                $this->addFlash('error', 'Offre d\'id' . $id . ' is purchased by a client ');

            } else {
                $registry->remove($offre);
                $registry->flush();
                $this->addFlash('success', 'Offre with id' . $id . ' deleted successfully');
            }
        }
        return $this->redirectToRoute('consulterforfait');

    }

    #[Route('/add_service', name: 'add_service')]
    public function add_service(ManagerRegistry $doctrine, Request $request): Response
    {
        $Offre = new Offres();
        $form = $this->createForm(OffreType::class, $Offre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $doctrine->getManager();
            $manager->persist($Offre);
            $manager->flush();

            $this->addFlash('success', $Offre->getName() . " added successfully ");
            return $this->redirectToRoute('consulterforfait');
        } else {
            return $this->render('MainPages/Admin/add_service.html.twig', ['form' => $form->createView()]);
        }
    }
}
