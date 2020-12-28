<?php

use Sentry;
class SentryConfiguration
{

    /** @var Configuration */
    private $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
        $this->configuration->dsn = 'https://6935a71c8d064cdbbdc3d48ef14e2417@o53554.ingest.sentry.io/5571953';
        $this->configuration->traces_sample_rate = '';
    }

    function init()
    {
        $config = array(
            'dsn' => $this->configuration->dsn,
            'traces_sample_rate' => $this->configuration->traces_sample_rate
        );
        Sentry\init($config);
    }

    public function dsnExist($dsn)
    {
        if ($dsn == null || $dsn == "") {
            throw new ErrorException($this->configuration->message);
        }
    }
}