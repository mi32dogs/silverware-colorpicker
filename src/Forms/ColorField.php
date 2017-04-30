<?php

/**
 * This file is part of SilverWare.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\Colorpicker\Forms
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-colorpicker
 */

namespace SilverWare\Colorpicker\Forms;

use SilverStripe\Forms\TextField;

/**
 * An extension of the text field class for a color field.
 *
 * @package SilverWare\Colorpicker\Forms
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-colorpicker
 */
class ColorField extends TextField
{
    /**
     * Answers the field type for the template.
     *
     * @return string
     */
    public function Type()
    {
        return 'colorfield text';
    }
    
    /**
     * Answers a unique ID for the wrapper element.
     *
     * @return string
     */
    public function getWrapperID()
    {
        return sprintf('%s_Wrapper', $this->ID());
    }
    
    /**
     * Answers an string of class names for the wrapper element.
     *
     * @return string
     */
    public function getWrapperClass()
    {
        return implode(' ', $this->getWrapperClassNames());
    }
    
    /**
     * Answers an array of class names for the wrapper element.
     *
     * @return array
     */
    public function getWrapperClassNames()
    {
        $classes = ['wrapper', 'input-group', 'colorpicker-component'];
        
        $this->extend('updateWrapperClassNames', $classes);
        
        return $classes;
    }
    
    /**
     * Answers an string of class names for the addon element.
     *
     * @return string
     */
    public function getAddonClass()
    {
        return implode(' ', $this->getAddonClassNames());
    }
    
    /**
     * Answers an array of class names for the addon element.
     *
     * @return array
     */
    public function getAddonClassNames()
    {
        $classes = ['input-group-addon'];
        
        $this->extend('updateAddonClassNames', $classes);
        
        return $classes;
    }
}
