<?php
namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $list = $this->getEm()
            ->getRepository('Application\Entity\Cliente')
            ->findAll();

        return new ViewModel(
            array('home' => $list)
        );
    }

    private function getEm()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        return $em;
    }
}
