# think-validate

## 安装
```bash
composer require reaway/think-validate
```

## 用法
```php
use Think\Component\Validate\Facade\Validate;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$rule = [
    'name'  => 'require|max:25',
    'email' => 'email'
];
$data = [
    'name'  => 'thinkphp',
    'email' => 'thinkphp@qq.com'
];
$validate = Validate::rule($rule);
if (!$validate->check($data)) {
    var_dump($validate->getError());
}
```