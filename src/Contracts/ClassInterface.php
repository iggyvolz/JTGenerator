<?php
/*
 * This file is part of JTGenerator
 *
 * (c) Bjoern Klemm <appsdock.enterprise@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JTGenerator\Contracts;

/**
 * This file is part of JTGenerator
 *
 * (c) Bjoern Klemm <appsdock.enterprise@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface ClassInterface
 *
 * @package JTGenerator\Contracts
 */
interface ClassInterface
{
    /**
     *
     */
    public function validate(): void;

    public function isAbstract(): bool;

    public function hasDecorator(): bool;

    public function hasExtend(): bool;

    public function getExtend(): string;
}
