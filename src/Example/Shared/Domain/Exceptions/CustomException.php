<?php
declare(strict_types=1);

namespace Src\Example\Shared\Domain\Exceptions;

class CustomException extends \Exception
{
    // Return a default json when has a exception
    public function toException(): array
    {
        $classTemp = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemp->getName());
        return [
            'status'  => $this->getCode(),
            'error'  => true,
            'class'   => end($class),
            'message' => $this->getMessage()
        ];
    }
}