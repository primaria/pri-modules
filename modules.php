<?php

/*
 * This file is part of the Primaria project
 *
 * (c) Primaria project
 *
 */

namespace primaria\modules;

use yii\base\Module as BaseModule;

/**
 * This is the main module class for the Yii2-user.
 *
 * @property array $modelMap
 *
 * @author primaria <primaria@gmail.com>
 */
class Modules extends BaseModule
{
    const VERSION = '0.1.0';

    /** @var array Model map */
    public $modelMap = [];

}