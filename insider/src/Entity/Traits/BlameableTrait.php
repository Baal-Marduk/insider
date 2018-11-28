<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait BlameableTrait
{
    /**
     * @var boolean
     * @ORM Column(type="boolean", options={"default" :false})
     *
     */

    private $blameable = false;

    /**
     * @return bool
     */
    public function isArchived():bool{
        return $this->archived;
    }



}