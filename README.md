# PHPStan rule to disallow use of the ternary operator
[![Build Status](https://travis-ci.org/samlitowitz/no-ternary.svg?branch=master)](https://travis-ci.org/samlitowitz/no-ternary)

# Usage
To use these rules, require it via [Composer](https://getcomposer.org/)
```
composer require samlitowitz/no-ternary --dev
```

Include rules.neon in your project's PHPStan config
```
includes:
    - vendor/samlitowitz/no-ternary/rules.neon
```
