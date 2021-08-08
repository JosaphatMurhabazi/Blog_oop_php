<?php

namespace App\Entity;

use Core\Entinty\Entity;

class categoryEntity extends Entity
{
    public function getUrl()
    {
        return 'index.php?p=posts.category&id=' . $this->id;
    }
}
