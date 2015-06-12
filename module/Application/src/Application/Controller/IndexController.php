<?php
namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 * @package Application\Controller
 */
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $list = $this->getEm()
            ->getRepository('Application\Entity\Cliente')
            ->findAll();

        return new ViewModel(
            ['home' => $list]
        );
    }

    private function getEm()
    {
        return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    }
}
