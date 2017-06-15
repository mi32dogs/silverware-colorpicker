<?php

/**
 * This file is part of SilverWare.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\Colorpicker\ORM\FieldType
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-colorpicker
 */

namespace SilverWare\Colorpicker\ORM\FieldType;

use SilverStripe\ORM\FieldType\DBVarchar;
use SilverWare\Colorpicker\Forms\ColorField;

/**
 * An extension of the varchar field type for a color field type.
 *
 * @package SilverWare\Colorpicker\ORM\FieldType
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-colorpicker
 */
class DBColor extends DBVarchar
{
    /**
     * Constructs the object upon instantiation.
     *
     * @param string $name
     * @param array $options
     */
    public function __construct($name = null, $options = [])
    {
        // Construct Parent:
        
        parent::__construct($name, 32, $options);
    }
    
    /**
     * Answers a form field instance for automatic form scaffolding.
     *
     * @param string $title Title of the field instance.
     * @param array $params Array of extra parameters.
     *
     * @return ColorField
     */
    public function scaffoldFormField($title = null, $params = null)
    {
        return ColorField::create($this->name, $title);
    }
}
