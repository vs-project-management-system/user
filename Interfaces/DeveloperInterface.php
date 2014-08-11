<?php
namespace PMS\Componet\User\Interfaces;

interface DeveloperInterface
{
    /**
     * Is admin
     * 
     * @param boolean|null $admin
     * @return boolean|\PMS\Component\User\Model\Developer
     */
    public function isAdmin($admin = null);
}
