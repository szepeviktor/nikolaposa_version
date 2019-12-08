<?php

declare(strict_types=1);

namespace Version\Exception;

use DomainException;

class InvalidComparisonConstraintException extends DomainException implements ExceptionInterface
{
    public static function forUnsupportedOperator(string $operator): self
    {
        return new self(sprintf('Unsupported comparison constraint operator: %s', $operator));
    }
}
