<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;

use Knp\Menu\ItemInterface as MenuItemInterface;

abstract class AdminExtension implements AdminExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function configureFormFields(FormMapper $form)
    {}

    /**
     * {@inheritdoc}
     */
    public function configureListFields(ListMapper $list)
    {}

    /**
     * {@inheritdoc}
     */
    public function configureDatagridFilters(DatagridMapper $filter)
    {}

    /**
     * {@inheritdoc}
     */
    public function configureShowFields(ShowMapper $filter)
    {}

    /**
     * {@inheritdoc}
     */
    public function configureRoutes(AdminInterface $admin, RouteCollection $collection)
    {}

    /**
     * {@inheritdoc}
     */
    public function configureSideMenu(AdminInterface $admin, MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {}

    /**
     * {@inheritdoc}
     */
    public function validate(AdminInterface $admin, ErrorElement $errorElement, $object)
    {}

    /**
     * {@inheritdoc}
     */
    public function configureQuery(AdminInterface $admin, ProxyQueryInterface $query, $context = 'list')
    {}
}
