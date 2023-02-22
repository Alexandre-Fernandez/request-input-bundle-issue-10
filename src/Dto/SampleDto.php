<?php

namespace App\Dto;

use Sfmok\RequestInput\InputInterface;
use Symfony\Component\Validator\Constraints as Assert;

class SampleDto implements InputInterface
{
    #[Assert\NotBlank]
    private string $property;

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($property)
    {
        $this->property = $property;
        return $this;
    }
}
