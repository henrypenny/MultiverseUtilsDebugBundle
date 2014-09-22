<?php
/**
 * Created by PhpStorm.
 * User: henrypenny
 * Date: 10/09/14
 * Time: 7:19 AM
 */

namespace Multiverse\Utils\DebugBundle\Twig;


class DebugTwigExtension extends \Twig_Extension {

    public function getFunctions() {
        return array(
            new \Twig_SimpleFunction('mv_debug', array($this, 'debug')),
        );
    }

    public function debug($var = null) {
        xdebug_break();
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'multiverse_debug_extension';
    }
}