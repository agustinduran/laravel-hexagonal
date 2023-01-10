<?php
declare(strict_types=1);

namespace Src\Example\Shared\Domain\Exceptions;

use Throwable;

class CustomException extends \Exception
{
    public function __construct(
        string $message = "",
        int $code = 0,
        ?Throwable $previous = null,
        private ?array $data = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    // Return a default json when has a exception
    public function toException(): array
    {
        $classTemp = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemp->getName());
        $response = [
            'status'  => $this->getCode(),
            'success' => false,
            'class'   => end($class),
            'message' => $this->getMessage(),
        ];
        if ($this->data) $response['data'] = $this->data;
        return $response;
    }
}