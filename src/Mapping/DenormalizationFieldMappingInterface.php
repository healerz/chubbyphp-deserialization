<?php

declare(strict_types=1);

namespace Chubbyphp\Deserialization\Mapping;

use Chubbyphp\Deserialization\Denormalizer\FieldDenormalizerInterface;

interface DenormalizationFieldMappingInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function getGroups(): array;

    /**
     * @return FieldDenormalizerInterface
     */
    public function getFieldDenormalizer(): FieldDenormalizerInterface;
}
