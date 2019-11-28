<?php

namespace intermundia\yii2GaOptOut;

use yii\base\Widget;


class GaOpOut extends Widget
{
    // view
    public $view;

    //gap Id
    public $gaAppId;

    //output call event
    public $optOutCallEvent = 'click';

    //element selector with link to jsoutput
    public $elementSelector = '[href="#jsgaoptout"]';

    //Alert message on disable
    public $alertMessage = 'Google Analytics tracking has been deactivated in your browser for this website.';

    /**
     * @var bool
     */
    public $debug = false;

    public $showAlterAfterDeactivate = true;

    public function init()
    {
        AssetBundle::register($this->getView());
        $this->getView()->registerJs("
            new ApGaOptOut({
                gaAppId: '{$this->gaAppId}',
                optOutCallEvent: '{$this->optOutCallEvent}',
                elementSelector: '{$this->elementSelector}',
                debug: " . ($this->debug ? 'true' : 'false') . ",
                showAlterAfterDeactivate: " . ($this->showAlterAfterDeactivate ? 'true' : 'false') . ",
                alterMessage: '{$this->alertMessage}'
            });
        ");
    }
}