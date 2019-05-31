## 安装
使用 Composer 安装:

```
$ composer require "laravist_heart/hasher_heart:~1.0"
```
或者在你的 composer.json的require部分添加

```
"laravist_heart/hasher_heart:~1.0"
```
下载完毕后直接在```app/config.php```的```provider```添加:
```
Laravist\Hasher\MD5HasherProvider::class,
```