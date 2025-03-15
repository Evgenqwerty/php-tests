<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;

use function StringUtils\capitalize;

Assert::eq(capitalize('hello'), 'Hello', 'первая буква не сменилась');
Assert::eq(capitalize(''), '', 'не обработася пустой запрос');
echo 'Все тесты пройдены!';
