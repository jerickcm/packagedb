<?php

namespace Jerickcm\Packagedb;

use Jerickcm\Packagedb\Models\Randomable as RandomableModel;

class Randomable
{
    public function firstName()
    {
        return RandomableModel::getRandomFirstName();
    }

    public function lastName()
    {
        return RandomableModel::getRandomLastName();
    }

    public function email()
    {
        return RandomableModel::getRandomEmail();
    }
}
