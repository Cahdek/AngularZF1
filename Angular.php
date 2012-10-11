<?php
/**
 * AngularZF1
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/bsd-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category    AngularZF1
 * @package     AngularZF1_Angular
 * @subpackage  View
 * @copyright  Copyright (c) 2012 Gregory Wilson (http://www.drakos7.net)
 * @license     http://opensource.org/licenses/bsd-license.php     New BSD License
 */

/**
 * Angular Global Class holding constants and static convienience methods.
 *
 * @package    AngularZF1_Angular
 * @copyright  Copyright (c) 2012 Gregory Wilson (http://www.drakos7.net)
 * @license    http://opensource.org/licenses/bsd-license.php     New BSD License
  */
class AngularZF1_Angular
{
    /**
     * Current default supported Angular library version with AngularZF1_Angular
     * 
     * @const string
     */
    const DEFAULT_ANGULAR_VERSION = "1.0.2";

    /**
     * @see https://developers.google.com/speed/libraries/devguide#angularjs
     * @const string Base path to CDN
     */
    const CDN_BASE_GOOGLE = '//ajax.googleapis.com/ajax/libs/';

    /**
     * @const string
     */
    const CDN_SUBFOLDER_ANGULAR = 'angularjs/';

    /**
     * Always uses compressed version, because this is assumed to be the use case
     * in production enviroment. An uncompressed version has to included manually.
     *
     * @see https://developers.google.com/speed/libraries/devguide#angularjs
     * @const string File path after base and version
     */
    const CDN_ANGULAR_PATH_GOOGLE = '/angular.min.js';

    /**
     * Which parts of the the Angular library should be rendered on echo'ing
     * the Angular library to the View. The constants act as bit-mask. This
     * way the Angular autogenerated code can be refactored based on personal needs.
     *
     * @see AngularZF1_Angular_Helper_Angular::setRenderMode
     * @const Integer
     */
    const RENDER_LIBRARY         = 1;
    const RENDER_SOURCES         = 2;
    const RENDER_JAVASCRIPT      = 4;
    const RENDER_ANGULAR_ON_LOAD  = 8;
    const RENDER_ALL             = 255;

    /**
     * Angular-enable a view instance
     *
     * @param  Zend_View_Interface $view
     * @return void
     */
    public static function enableView(Zend_View_Interface $view)
    {
        if (false === $view->getPluginLoader('helper')->getPaths('AngularZF1_Angular_View_Helper')) {
            $view->addHelperPath('AngularZF1/Angular/View/Helper', 'AngularZF1_Angular_View_Helper');
        }
    }

}