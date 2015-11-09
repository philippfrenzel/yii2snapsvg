<?php

namespace net\frenzel\snapsvg;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/Snap.svg/dist';

    /**
     * [$css description]
     * @var array
     */
    public $css = [
        //none to declare
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'snap.svg.js',
    ];
}
