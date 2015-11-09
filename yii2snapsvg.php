<?php

 /**
 * This class is used to embed textarea autosize JQuery Plugin to my Yii2 Projects
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 * @license MIT
 */

namespace net\frenzel\snapsvg;

use Yii;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\base\Widget as baseWidget;

class yii2snapsvg extends baseWidget
{
    /**
     * @var array clientOptions the HTML attributes for the widget container tag.
     */
    public $clientOptions = [];

    /**
     * the options for this plugin
     * @var array
     */
    public $options = [];

    /**
     * @inerhit doc
     */
    private $_pluginName = 'yii2-snapsvg';

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {        
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }        
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {   
        //$this->options['data-plugin-name'] = $this->_pluginName;
        $this->registerPlugin();
    }

    /**
    * Registers the FullCalendar javascript assets and builds the requiered js  for the widget and the related events
    */
    protected function registerPlugin()
    {        
        $id = $this->options['id'];
        $view = $this->getView();

        /** @var \yii\web\AssetBundle $assetClass */
        CoreAsset::register($view);

        $cleanOptions = $this->getClientOptions();
        $js[] = "var snap$id = Snap('#$id');";
    
        $view->registerJs(implode("\n", $js),View::POS_READY);
    }

    /**
     * @return array the options for the text field
     */
    protected function getClientOptions()
    {
        return Json::encode($this->clientOptions);
    }

}
