<?php

namespace primaria\modules;

use Yii;
use yii\base\InvalidConfigException;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'primaria\modules\controllers';
    public $defaultRoute = 'modules';

    // Directory
    public $modulesDir;

    public function init()
    {
        parent::init();

        /* if (!isset(Yii::$app->i18n->translations['plugin'])) {
            Yii::$app->i18n->translations['plugin'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@lo/plugins/messages'
            ];
        } */

        //user did not define the Navbar?
        if (!$this->pluginsDir) {
            throw new InvalidConfigException('"pluginsDir" must be set');
        }
    }
}
