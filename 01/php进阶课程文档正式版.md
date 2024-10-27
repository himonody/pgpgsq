## 数据类型转换

### 整数/浮点数/布尔值转字符串

#### 函数strval ()

```php
$int = 123;
$str = strval($int);
var_dump($str); // 输出 "123"

$float = 3.14;
$str = strval($float);
var_dump($str); // 输出 "3.14"

$bool = true;
$str = strval($bool);
var_dump($str); // 输出 "1"
//注意：布尔值true转换为字符串时会得到"1"，而false则会得到""（空字符串）
```

#### 类型强制转换 (string)

```php
$bool = true;
$str = (string)$bool;
var_dump($str); // 输出 "1"
```

#### 字符串连接，隐式转换

```php
$bool = true;
$str = $bool . "";
var_dump($str);
```

### 字符串转整数

#### 函数intval ()

```php
$str = "123";
$int = intval($str);
var_dump($int) ; // 输出 123
```

#### 类型强制转换 (int) 或 (integer)

```php
 $str = "123";
 //$int = (integer)$str;
 $int = (int)$str;
 var_dump($int) ;
```

### 字符串转浮点数

#### 函数floatval ()

```php
$str = "3.14";
$float = floatval($str);
var_dump($float);  // 输出 3.14
```

#### 强制类型转换 (float) 或 (double)

```php
$str = "3.14";
$float = (float)$str;
var_dump($float); // 输出 3.14
```

### 字符串转布尔值

#### 函数boolval ()

```php
$str = "true";
$bool = boolval($str);
var_dump($bool);

$str = "false";
$bool = boolval($str);
var_dump($bool);

$str = "0";
$bool = boolval($str);
var_dump($bool);

$str = "";
$bool = boolval($str);
var_dump($bool);
```

注意：一般""或"0"会转为false，其他都会转为true

#### 强制类型转换 (bool) 或 (boolean)

```php
$str = "";
$bool = (boolean)$str;
var_dump($bool);
```

#### PHPDoc 声明 （文档注释）

* @param 表示参数信息 
* @return 表示返回值信息 
* @throws 表示异常信息 
* @see 表示相关信息 
* @link 表示链接信息 
* @since 表示版本信息 
* @author 表示作者信息 
* @copyright 表示版权信息 
* @license 表示许可证信息 
* @version 表示版本信息 
* @todo 表示待办事项 
* @deprecated 表示已弃用信息 

```php
/**
 * 获取用户信息
 *
 * @param int $id 用户 ID
 * @return array 用户信息
 *
 * @see get_user_by_id() 获取用户信息
 * @link https://www.example.com/user/get 获取用户信息
 * @since 1.0.0 版本
 * @author Maoshu 作者
 * @copyright Copyright (c) 2024 猫叔
 * @license MIT License 许可证
 * @version 1.0.0 版本
 * @todo 待办事项
 * @deprecated 已弃用信息
 */
function getUserInfo($id)
{
    // 获取用户信息
    $user = get_user_by_id($id);

    // 返回用户信息
    return $user;
}
```

## 函数传参 （传值和传引用）

传值和传引用是两种传递参数的方式。传值是指将参数的值复制一份，然后将这份复制的值传递给函数或方法。而传引用则是指将参数的内存地址传递给函数或方法，这样函数或方法就可以直接访问原始数据，而不是复制一份。

```php
function increment($number) {
    $number++;
    echo "函数内部的值：" . $number . "\n";
}

$myNumber = 5;
increment($myNumber);
echo "函数外部的值：" . $myNumber . "\n";
```

传值和传引用的主要区别在于传递参数的方式不同，这也会影响到函数或方法对参数的处理方式。当使用传值方式时，函数或方法对参数的修改不会影响到原始数据。而当使用传引用方式时，函数或方法对参数的修改会直接影响到原始数据。

```php
function increment(&$number) {
    $number++;
    echo "函数内部的值：" . $number . "\n";
}

$myNumber = 5;
increment($myNumber);
echo "函数外部的值：" . $myNumber . "\n";
```

```php
list($method, $key) = explode('.', $key, 2);
```

#### 序列化和反序列化

```php
$serialized = 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}';
$unserialized = unserialize($serialized);

print_r($unserialized);
print_r(serialize(["1","2","3"]));
```

## 函数filter_var ()

用于过滤和验证变量的数据。
它可以对字符串、整数、浮点数等多种类型的数据进行过滤或验证，并且支持多种预定义的过滤器类型以及自定义过滤规则

```php
mixed filter_var ( mixed $variable [, int $filter [, mixed $options ]] )
```

- `$variable`: 需要过滤或验证的数据。
- `$filter`: 过滤器类型，可以是预定义的常量，例如 `FILTER_SANITIZE_EMAIL` 用于过滤电子邮件地址，`FILTER_VALIDATE_INT` 用于验证整数等。
- `$options`: 可选参数，用于为所使用的过滤器提供附加选项（如指定整数的范围、URL允许的协议等）。

##### 过滤并去掉HTML标签

```php
$user_input = "<script>alert('XSS');</script>";
$filtered = filter_var($user_input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $filtered; // 输出：alert('XSS')
```

##### 验证电子邮件

```php
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email 是一个有效的电子邮件地址");
} else {
    echo("$email 不是一个有效的电子邮件地址");
}
```

##### 验证是否为整数

```php
$int = "42";
if ($int = filter_var($int, FILTER_VALIDATE_INT)) {
    echo "$int 是一个有效的整数";
} else {
    echo "$int 不是一个有效的整数";
}
```

##### 验证是否为url

```php
$url = "https://www.aliyun.com";
if ($url = filter_var($url, FILTER_VALIDATE_URL)) {
    echo "$url 是一个有效的URL";
} else {
    echo "$url 不是一个有效的URL";
}
```