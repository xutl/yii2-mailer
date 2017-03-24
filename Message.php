<?php

namespace xutl\mailgunmailer;

use yii\mail\BaseMessage;
use Mailgun\Messages\MessageBuilder;

/**
 * Message implements a message class based on Mailgun.
 *
 *
 * @method Mailer getMailer() returns mailer instance.
 *
 *
 * @author Katanyoo Ubalee <ublee.k@gmail.com>
 * @author XU TL <xutl@gmail.com>
 */
class Message extends BaseMessage
{

    public $message = [];

    /**
     * @inheritdoc
     */
    public function getCharset()
    {
        return isset($this->message['charset']) ? $this->message['charset'] : 'utf-8';
    }

    /**
     * @inheritdoc
     */
    public function setCharset($charset)
    {
        $this->message['charset'] = $charset;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getFrom()
    {
        return isset($this->message['from']) ? $this->message['from'] : null;
    }

    /**
     * @inheritdoc
     */
    public function setFrom($from)
    {
        $this->message['from'] = $from;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getReplyTo()
    {
        return isset($this->message['replyTo']) ? $this->message['replyTo'] : null;
    }

    /**
     * @inheritdoc
     */
    public function setReplyTo($replyTo)
    {
        $this->message['replyTo'] = $replyTo;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTo()
    {
        return isset($this->message['to']) ? $this->message['to'] : null;
    }

    /**
     * @inheritdoc
     */
    public function setTo($to)
    {
        $this->message['to'] = $to;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCc()
    {
        return isset($this->message['cc']) ? $this->message['cc'] : null;
    }

    /**
     * @inheritdoc
     */
    public function setCc($cc)
    {
        $this->message['cc'] = $cc;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBcc()
    {
        return isset($this->message['bcc']) ? $this->message['bcc'] : null;
    }

    /**
     * @inheritdoc
     */
    public function setBcc($bcc)
    {
        $this->message['bcc'] = $bcc;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSubject()
    {
        return isset($this->message['subject']) ? $this->message['subject'] : null;
    }

    /**
     * @inheritdoc
     */
    public function setSubject($subject)
    {
        $this->message['subject'] = $subject;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setTextBody($text)
    {
        $this->message['textBody'] = $text;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setHtmlBody($html)
    {
        $this->message['htmlBody'] = $html;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function attach($fileName, array $options = [])
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function attachContent($content, array $options = [])
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function embed($fileName, array $options = [])
    {
        //$this->getMessageBuilder()->addAttachment($fileName);
        return null;
    }

    /**
     * @inheritdoc
     */
    public function embedContent($content, array $options = [])
    {
        //$this->getMessageBuilder()->addAttachment($fileName);
        return null;
    }

    /**
     * @inheritdoc
     */
    public function toString()
    {
        return "mailgun_tostring()_method";
    }

    /**
     * @return array message object
     */
    public function getMessage()
    {
        return $this->message;
    }
}