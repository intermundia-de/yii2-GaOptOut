<?php

namespace intermundia\yii2GaOptOut;

class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/gaoptout';
    public $js = [
        'ApGaOptOut.js'
    ];
}