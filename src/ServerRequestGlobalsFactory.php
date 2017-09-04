<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

interface ServerRequestGlobalsFactory
{
    /**
     * @param array|null $server  If `null`, `$_SERVER` MUST be used.
     * @param array|null $query   If `null`, `$_GET` MUST be used.
     * @param array|null $body    If `null`, `$_POST` MUST be used.
     * @param array|null $cookies If `null`, `$_COOKIE` MUST be used.
     * @param array|null $files   If `null`, `$_FILES` MUST be used.
     *
     * @return ServerRequest
     */
    public function createServerRequestFromGlobals(
        array $server = null,
        array $query = null,
        array $body = null,
        array $cookies = null,
        array $files = null
    ): ServerRequest;
}