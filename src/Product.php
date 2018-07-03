<?php

namespace Acme;

use Acme\Depend;


class Product
{
    /**
     * @var Depend
     */
    private $depend;

    public function __construct(Depend $depend)
    {
        $this->depend = $depend;

    }


    public function multi()
    {
        $test = $this->depend->add(5);

        $result = $test * 10;

        return $result;
    }



}

