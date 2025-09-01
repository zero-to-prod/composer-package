# Zerotoprod\ComposerPackage

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/composer-package)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/composer-package/test.yml?label=test)](https://github.com/zero-to-prod/composer-package/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/composer-package/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/composer-package/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/composer-package?color=blue)](https://packagist.org/packages/zero-to-prod/composer-package/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/composer-package.svg?color=purple)](https://packagist.org/packages/zero-to-prod/composer-package/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/composer-package?color=f28d1a)](https://packagist.org/packages/zero-to-prod/composer-package)
[![License](https://img.shields.io/packagist/l/zero-to-prod/composer-package?color=pink)](https://github.com/zero-to-prod/composer-package/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/composer-package.svg)](https://wakatime.com/badge/github/zero-to-prod/composer-package)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/composer-package?branch=main)](https://hitsofcode.com/github/zero-to-prod/composer-package/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
  - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

Creates a [DataModel](https://github.com/zero-to-prod/data-model) representation of a `composer.json` file.

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\ComposerPackage` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/composer-package
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/composer-package)
vendor/bin/zero-to-prod-composer-package

# Publish to custom directory
vendor/bin/zero-to-prod-composer-package /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-composer-package"
        ],
        "post-update-cmd": [
            "zero-to-prod-composer-package"
        ]
    }
}
```

## Usage

Create a [DataModel](https://github.com/zero-to-prod/data-model) from a `composer.json` file like this:

```php
use Zerotoprod\ComposerPackage\ComposerPackage;

$ComposerPackage = ComposerPackage::from(json_decode(file_get_contents(__DIR__ . 'composer.json'), true));
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/composer-package/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
