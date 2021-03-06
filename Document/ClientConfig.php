<?php

namespace Itkg\ConsumerBundle\Document;

use Itkg\ConsumerBundle\Model\ClientConfig as BaseClientConfig;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class ClientConfig
 *
 * @ODM\EmbeddedDocument
 */
class ClientConfig extends BaseClientConfig
{
    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=true)
     */
    protected $proxyHost;

    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=true)
     */
    protected $proxyPort;

    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=true)
     */
    protected $proxyLogin;

    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=true)
     */
    protected $proxyPassword;

    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=true)
     */
    protected $authLogin;

    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=true)
     */
    protected $authPassword;

    /**
     * @var string
     *
     * @ODM\Field(type="string", nullable=false)
     */
    protected $baseUrl;
}
