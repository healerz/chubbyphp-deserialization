<?php

declare(strict_types=1);

namespace Chubbyphp\Deserialization;

use Chubbyphp\Deserialization\Decoder\DecoderInterface;
use Chubbyphp\Deserialization\Denormalizer\DenormalizerContextInterface;
use Chubbyphp\Deserialization\Denormalizer\DenormalizerInterface;

interface DeserializerInterface extends DecoderInterface, DenormalizerInterface
{
    /**
     * @param object|string                $object
     * @param string                       $data
     * @param string                       $contentType
     * @param DenormalizerContextInterface $context
     * @param string                       $path
     *
     * @return object
     */
    public function deserialize(
        $object,
        string $data,
        string $contentType,
        DenormalizerContextInterface $context = null,
        string $path = ''
    );
}
