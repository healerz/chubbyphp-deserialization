<?php

declare(strict_types=1);

namespace Chubbyphp\Tests\Deserialize\Resources\Mapping;

use Chubbyphp\Deserialize\DeserializerInterface;
use Chubbyphp\Deserialize\Mapping\ObjectMappingInterface;
use Chubbyphp\Deserialize\Mapping\PropertyMapping;
use Chubbyphp\Deserialize\Mapping\PropertyMappingInterface;
use Chubbyphp\Tests\Deserialize\Resources\Model\Many;
use Chubbyphp\Tests\Deserialize\Resources\Model\One;

final class OneMapping implements ObjectMappingInterface
{
        /**
     * @return string
     */
    public function getClass(): string
    {
        return One::class;
    }

    /**
     * @return PropertyMappingInterface[]
     */
    public function getPropertyMappings(): array
    {
        return [
            new PropertyMapping('id'),
            new PropertyMapping('name'),
            new PropertyMapping('manies', function($newData, DeserializerInterface $deserializer) {
                $manies = [];
                foreach ($newData as $element) {
                    $manies[] = $deserializer->deserializeFromArray($element, Many::class);
                }

                return $manies;
            }),
        ];
    }
}
