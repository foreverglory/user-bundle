<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <https://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Glory\Bundle\UserBundle\DependencyInjection\Compiler\RegisterPass;
use Glory\Bundle\UserBundle\DependencyInjection\Compiler\GroupPass;
//use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;

/**
 * build
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class GloryUserBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new RegisterPass());
        $container->addCompilerPass(new GroupPass());

//        $container->addCompilerPass(DoctrineOrmMappingsPass::createPhpMappingDriver([
//                    realpath(__DIR__ . '/Entity') => 'Glory\Bundle\UserBundle\Entity'
//                        ], array('glory_user.model_manager_name'), 'glory_user.doctrine_mapping'));
    }

}
