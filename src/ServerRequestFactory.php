<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

use Pls\Identifier\Uri\Uri;

interface ServerRequestFactory
{
    public function createServerRequest(
        Uri $uri,
        string $method = Method::GET
    ): ServerRequest;

    public function createServerRequestFromValue(
        iterable $server
    ): ServerRequest;
}
