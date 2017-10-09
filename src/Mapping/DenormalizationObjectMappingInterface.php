<?php

declare(strict_types=1);

namespace Chubbyphp\Deserialization\Mapping;

interface DenormalizationObjectMappingInterface
{
    /**
     * @param string $class
     *
     * @return bool
     */
    public function isDenormalizationResponsible(string $class): bool;

    /**
     * @param string|null $type
     *
     * @return callable
     */
    public function getDenormalizationFactory(string $type = null): callable;

    /**
     * @param string|null $type
     *
     * @return DenormalizationFieldMappingInterface[]
     */
    public function getDenormalizationFieldMappings(string $type = null): array;
}