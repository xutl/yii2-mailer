<?php

namespace xutl\mailgunmailer;

use Yii;
use yii\di\Instance;
use yii\base\InvalidConfigException;
use yii\mail\BaseMailer;
use xutl\mq\MessageQueue;

/**
 * Mailer implements a mailer based on Mailgun.
 *
 * To use Mailer, you should configure it in the application configuration like the following,
 *
 * ~~~
 * 'components' => [
 *     ...
 *     'mailer' => [
 *         'class' => 'xutl\mailer\Mailer',
 *         'queue' => 'mailer',
 *     ],
 *     ...
 * ],
 * ~~~
 */
class Mailer extends BaseMailer
{

    /**
     * [$messageClass description]
     * @var string message default class name.
     */
    public $messageClass = 'xutl\mailer\Message';

    public $mq;

    public $queue;

    /**
     * 初始化
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();
        if (empty ($this->mq)) {
            throw new InvalidConfigException ('The "mq" property must be set.');
        }
        if (empty ($this->queue)) {
            throw new InvalidConfigException ('The "queue" property must be set.');
        }
        $this->mq = Instance::ensure($this->mq, MessageQueue::className());

    }

    /**
     * 将邮件消息推到队列
     * @param Message $message
     * @return bool
     */
    protected function sendMessage($message)
    {
        Yii::info('Sending email', __METHOD__);
        $response = $this->mq->getQueueRef($this->queue)->sendMessage($message->getMessage());
        Yii::info('Response : ' . print_r($response, true), __METHOD__);
        return true;
    }
}
