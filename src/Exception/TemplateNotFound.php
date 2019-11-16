<?php

namespace Fabric\Contract\Exception;

use RuntimeException;

final class TemplateNotFound extends RuntimeException implements FabricExceptionInterface
{
    public static function create(string $templateName): self
    {
        return new self("Template '$templateName' not found.'");
    }
}
