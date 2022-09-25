# dumpファイル作成（ローカル）

▽dumpファイル作成

```
$ /Applications/MAMP/Library/bin/mysqldump -u ユーザー名 -p スキーマ名 > /Applications/MAMP/htdocs/lamp_test/database/dump_スキーマ名_yyyymmdd.sql
```

▽パスワード

```
パスワード
```

# clone（Lightsail）

▽ディレクトリ移動

```
$ cd /opt/bitnami/apache2/htdocs
```

▽clone

```
$ git clone https://github.com/LingmuSajun/lamp_test.git
```

# phpdotenvインストール（Lightsail）

▽ディレクトリ移動

```
$ cd /opt/bitnami/apache2/htdocs/lamp_test
```

▽phpdotenvインストール

```
$ composer require vlucas/phpdotenv
```

# .env作成（Lightsail）

▽ディレクトリ移動

```
$ cd /opt/bitnami/apache2/htdocs/lamp_test
```

▽.env作成

```
$ vi .env
```

▽.env編集

```
DB_HOST = 'mysql:dbname=lamp_test;host=ホスト名;charset=utf8'
DB_USER_NAME = 'ユーザー名'
DB_PASSWORD = 'パスワード'
```