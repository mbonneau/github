<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     _links="Contents\Links"
 * )
 * @EmptyResource("Contents\EmptyDirectory")
 */
abstract class Directory extends AbstractResource implements DirectoryInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $encoding;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $git_url;

    /**
     * @var string
     */
    protected $html_url;

    /**
     * @var string
     */
    protected $download_url;

    /**
     * @var Links
     */
    // @codingStandardsIgnoreStart
    protected $_links;
    // @codingStandardsIgnoreEnd

    /**
     * @return string
     */
    public function type() : string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function encoding() : string
    {
        return $this->encoding;
    }

    /**
     * @return int
     */
    public function size() : int
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function path() : string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function sha() : string
    {
        return $this->sha;
    }

    /**
     * @return string
     */
    public function url() : string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function gitUrl() : string
    {
        return $this->git_url;
    }

    /**
     * @return string
     */
    public function htmlUrl() : string
    {
        return $this->html_url;
    }

    /**
     * @return string
     */
    public function downloadUrl() : string
    {
        return $this->download_url;
    }

    /**
     * @return Links
     */
    public function links() : Links
    {
        return $this->_links;
    }
}
