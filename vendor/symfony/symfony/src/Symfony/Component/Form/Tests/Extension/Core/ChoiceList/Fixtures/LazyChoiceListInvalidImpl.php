<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\Core\ChoiceList\Fixtures;

use Symfony\Component\Form\Extension\Core\ChoiceList\LazyChoiceList;

class LazyChoiceListInvalidImpl extends LazyChoiceList
{
    protected function loadChoiceList()
    {
        return new \stdClass();
    }
}
