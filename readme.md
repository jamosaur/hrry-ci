[![Latest Version on Packagist][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

# hrry-ci


## Usage
```php
use Jamosaur/HrryCi;

$hrry = new HrryCi();
$hrry->text = 'Internet is serious business';
echo $hrry->outpt();
// intrnt is srs bsnss

echo (new HrryCi('wow, i am a 10x developer'))->outpt();
// wow i am a 10x dvlpr
```


[ico-version]: https://img.shields.io/packagist/v/jamosaur/hrry-ci.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jamosaur/hrry-ci/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jamosaur/hrry-ci.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jamosaur/hrry-ci.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jamosaur/hrry-ci
[link-travis]: https://travis-ci.org/jamosaur/hrry-ci
[link-scrutinizer]: https://scrutinizer-ci.com/g/jamosaur/hrry-ci/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jamosaur/hrry-ci
