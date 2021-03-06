<?php

namespace App\Controller\Admin;

use App\Entity\Attendance;
use App\Entity\Employee;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // return parent::index();
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        /*
        if ('jane' === $this->getUser()->getUsername()) {
            return $this->redirect('...');
        }
        */
        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Electrical Company');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Users', 'fas fa-user');
        yield MenuItem::linkToCrud('Attendance', 'fas fa-file', Attendance::class);
        yield MenuItem::linkToCrud('Employee', 'fas fa-briefcase', Employee::class);
    }

}
