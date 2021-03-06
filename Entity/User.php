<?php

/*
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 */

namespace Glory\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Glory\Bundle\UserBundle\Model\User as BaseUser;

/**
 * User entity
 * 
 * @ORM\Entity
 * @ORM\Table("user")
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="email",
 *          column=@ORM\Column(
 *              name     = "email",
 *              nullable = true
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="emailCanonical",
 *          column=@ORM\Column(
 *              name     = "email_canonical",
 *              nullable = true,
 *              unique   = false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="password",
 *          column=@ORM\Column(
 *              name     = "password",
 *              nullable = true
 *          )
 *      )
 * })
 * 
 * @author ForeverGlory <foreverglory@qq.com>
 */
class User extends BaseUser
{

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    protected $avatar;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_time", type="integer", nullable=true)
     */
    protected $createdTime;

    /**
     * @var string
     *
     * @ORM\Column(name="created_ip", type="string", length=64, nullable=true)
     */
    protected $createdIp;

    /**
     * @var string
     *
     * @ORM\Column(name="created_source", type="string", length=64, nullable=true)
     */
    protected $createdSource;

    /**
     * @var integer
     *
     * @ORM\Column(name="login_time", type="integer", nullable=true)
     */
    protected $loginTime;

    /**
     * @var string
     *
     * @ORM\Column(name="login_ip", type="string", length=64, nullable=true)
     */
    protected $loginIp;

    /**
     * @var string
     *
     * @ORM\Column(name="login_source", type="string", length=64, nullable=true)
     */
    protected $loginSource;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_time", type="integer", nullable=true)
     */
    protected $updatedTime;

    /**
     * @var Profile
     * 
     * @ORM\OneToOne(targetEntity="Profile", mappedBy="user")
     */
    protected $profile;

    /**
     * @ORM\ManyToMany(targetEntity="Group")
     * @ORM\JoinTable(name="user_group_relation",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    public function __construct()
    {
        parent::__construct();
    }

}
