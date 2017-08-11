# yii2-mailer

[![Latest Stable Version](https://poser.pugx.org/xutl/yii2-mailer/v/stable.png)](https://packagist.org/packages/xutl/yii2-mailer)
[![Total Downloads](https://poser.pugx.org/xutl/yii2-mailer/downloads.png)](https://packagist.org/packages/xutl/yii2-mailer)
[![Reference Status](https://www.versioneye.com/php/xutl:yii2-mailer/reference_badge.svg)](https://www.versioneye.com/php/xutl:yii2-mailer/references)
[![Build Status](https://img.shields.io/travis/xutl/yii2-mailer.svg)](http://travis-ci.org/xutl/yii2-mailer)
[![Dependency Status](https://www.versioneye.com/php/xutl:yii2-mailer/dev-master/badge.png)](https://www.versioneye.com/php/xutl:yii2-mailer/dev-master)
[![License](https://poser.pugx.org/xutl/yii2-mailer/license.svg)](https://packagist.org/packages/xutl/yii2-mailer)


适用于Yii2的邮件队列扩展

这个库的作用是把要发送的邮件全都推送到队列里并不实际发送邮件。

发送邮件交给消息的消费者来处理。而这个消费者可以用任何语言来写嘎嘎！




Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xutl/yii2-mailer
```

or add

```
"xutl/yii2-mailer": "~1.0.0"
```

to the require section of your `composer.json` file.
