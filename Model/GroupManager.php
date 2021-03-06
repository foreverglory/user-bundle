<?php

/*
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 */

namespace Glory\Bundle\UserBundle\Model;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of GroupManager
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class GroupManager
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __call($name, $arguments)
    {
        $userManager = $this->getFOSGroupManager();
        if (method_exists($userManager, $name)) {
            return call_user_func_array(array($userManager, $name), $arguments);
        }
    }

    /**
     * @return \FOS\UserBundle\Model\GroupManagerInterface
     */
    protected function getFOSGroupManager()
    {
        return $this->container->get('fos_user.group_manager');
    }

}
