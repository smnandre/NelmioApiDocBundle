<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Functional\Entity;

use ArrayIterator;
use IteratorAggregate;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(type="array", @OA\Items(type="string"))
 */
class EntityWithAlternateType implements IteratorAggregate
{
    /**
     * @var string
     */
    public $ignored = 'this property should be ignored because of the annotation above';

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator([
            'abc',
            'def',
        ]);
    }
}
