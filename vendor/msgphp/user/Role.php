<?php

declare(strict_types=1);

namespace MsgPhp\User;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
abstract class Role
{
    abstract public function getName(): string;
}
