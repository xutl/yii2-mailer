# yii2-mailer
适用于Yii2的邮件队列扩展

这个库的作用是把要发送的邮件全都推送到队列里并不实际发送邮件。

发送邮件交给消息的消费者来处理。而这个消费者可以用任何语言来写嘎嘎！

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xutl/yii2-mailer "*"
```

or add

```
"xutl/yii2-mailer": "*"
```

to the require section of your `composer.json` file.