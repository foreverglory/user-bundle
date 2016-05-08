<?php

/*
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 */

namespace Glory\Bundle\UserBundle\Model;

use FOS\UserBundle\Model\User as FOSUser;

/**
 * Description of User
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class User extends FOSUser
{

    protected $avatar;
    protected $loginTime;
    protected $loginIp;
    protected $createdTime;
    protected $createdIp;
    protected $createdSource;
    protected $updateTime;

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar? : '/bundles/gloryuser/images/avatar.jpg';
    }

    /**
     * Set loginTime
     *
     * @param integer $loginTime
     *
     * @return User
     */
    public function setLoginTime($loginTime)
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * Get loginTime
     *
     * @return integer
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * Set loginIp
     *
     * @param string $loginIp
     *
     * @return User
     */
    public function setLoginIp($loginIp)
    {
        $this->loginIp = $loginIp;

        return $this;
    }

    /**
     * Get loginIp
     *
     * @return string
     */
    public function getLoginIp()
    {
        return $this->loginIp;
    }

    /**
     * Set createdTime
     *
     * @param integer $createdTime
     *
     * @return User
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return integer
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set createdIp
     *
     * @param string $createdIp
     *
     * @return User
     */
    public function setCreatedIp($createdIp)
    {
        $this->createdIp = $createdIp;

        return $this;
    }

    /**
     * Get createdIp
     *
     * @return string
     */
    public function getCreatedIp()
    {
        return $this->createdIp;
    }

    /**
     * Set createdSource
     *
     * @param string $createdSource
     *
     * @return User
     */
    public function setCreatedSource($createdSource)
    {
        $this->createdSource = $createdSource;

        return $this;
    }

    /**
     * Get createdSource
     *
     * @return string
     */
    public function getCreatedSource()
    {
        return $this->createdSource;
    }

    /**
     * Set updatedTime
     *
     * @param integer $updatedTime
     *
     * @return User
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;

        return $this;
    }

    /**
     * Get updatedTime
     *
     * @return integer
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

}
