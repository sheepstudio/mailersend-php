<?php

namespace MailerSend;

use MailerSend\Common\HttpLayer;
use MailerSend\Endpoints\Email;

/**
 * This is the PHP SDK for MailerSend
 *
 * Class MailerSend
 * @package MailerSend
 */
class MailerSend
{
    protected array $options;
    protected static array $defaultOptions = [
        'host' => 'api.mailersend.com',
        'protocol' => 'https',
        'version' => 'v1',
        'port' => 443,
        'api_key' => '',
        'debug' => false,
    ];

    protected ?HttpLayer $httpLayer;

    public Email $email;

    /**
     * @param  array  $options  Additional options for the SDK
     * @param  HttpLayer  $httpLayer
     */
    public function __construct(array $options = [], ?HttpLayer $httpLayer = null)
    {
        $this->setOptions($options);
        $this->setEndpoints();
        $this->setHttpLayer($httpLayer);
    }

    protected function setEndpoints(): void
    {
        $this->email = new Email();
    }

    public function setHttpLayer(?HttpLayer $httpLayer = null): MailerSend
    {
        $this->httpLayer = $httpLayer ?: new HttpLayer();

        return $this;
    }

    public function setOptions(?array $options): MailerSend
    {
        $this->options = self::$defaultOptions;

        foreach ($options as $option => $value) {
            if (array_key_exists($option, $this->options)) {
                $this->options[$option] = $value;
            }
        }

        // TODO: Check if api_key is not empty

        return $this;
    }
}