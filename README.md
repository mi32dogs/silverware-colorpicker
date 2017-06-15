# SilverWare Colorpicker Module

[![Latest Stable Version](https://poser.pugx.org/silverware/colorpicker/v/stable)](https://packagist.org/packages/silverware/colorpicker)
[![Latest Unstable Version](https://poser.pugx.org/silverware/colorpicker/v/unstable)](https://packagist.org/packages/silverware/colorpicker)
[![License](https://poser.pugx.org/silverware/colorpicker/license)](https://packagist.org/packages/silverware/colorpicker)

Provides a new form field and database field type for choosing a color via a colorpicker. Intended
to be used with [SilverWare][silverware], however this module can also be installed into a regular
[SilverStripe v4][silverstripe-framework] project.

## Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Issues](#issues)
- [To-Do](#to-do)
- [Contribution](#contribution)
- [Attribution](#attribution)
- [Maintainers](#maintainers)
- [License](#license)

## Requirements

- [SilverStripe Framework v4][silverstripe-framework]

## Installation

Installation is via [Composer][composer]:

```
$ composer require silverware/colorpicker
```

## Configuration

As with all SilverStripe modules, configuration is via YAML. The SilverStripe dependency injector is
used to configure the color field type. Extensions to `LeftAndMain` are also applied via `config.yml`.

## Usage

### Field Type

To make use of the color field type in your code, you can reference the type in your `$db` array:

```php
use SilverStripe\ORM\DataObject;

class MyObject extends DataObject
{
    private static $db = [
        'MyColor' => 'Color'
    ];
}
```

You can also `use` the field type within your class file, and reference the field type directly:

```php
use SilverStripe\ORM\DataObject;
use SilverWare\Colorpicker\ORM\FieldType\DBColor;

class MyObject extends DataObject
{
    private static $db = [
        'MyColor' => DBColor::class
    ];
}
```

### Form Field

Within your `getCMSFields` method, create a `ColorField` to allow the user to choose a color:

```php
ColorField::create('MyColor', $this->fieldLabel('MyColor'));
```

Don't forget to first `use` the field in the header of your class file:

```php
use SilverWare\Colorpicker\Forms\ColorField;
```

## Issues

Please use the [GitHub issue tracker][issues] for bug reports and feature requests.

## To-Do

- Tests

## Contribution

Your contributions are gladly welcomed to help make this project better.
Please see [contributing](CONTRIBUTING.md) for more information.

## Attribution

- Makes use of [Bootstrap Colorpicker][bootstrap-colorpicker] by [Javi Aguilar](https://github.com/itsjavi).

## Maintainers

[![Colin Tucker](https://avatars3.githubusercontent.com/u/1853705?s=144)](https://github.com/colintucker) | [![Praxis Interactive](https://avatars2.githubusercontent.com/u/1782612?s=144)](http://www.praxis.net.au)
---|---
[Colin Tucker](https://github.com/colintucker) | [Praxis Interactive](http://www.praxis.net.au)

## License

[BSD-3-Clause](LICENSE.md) &copy; Praxis Interactive

[silverware]: https://github.com/praxisnetau/silverware
[composer]: https://getcomposer.org
[silverstripe-framework]: https://github.com/silverstripe/silverstripe-framework
[bootstrap-colorpicker]: https://github.com/itsjavi/bootstrap-colorpicker
[issues]: https://github.com/praxisnetau/silverware-colorpicker/issues
