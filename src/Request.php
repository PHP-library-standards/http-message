<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

use Pls\Identifier\Uri\Uri;

interface Request extends Message
{
    public function getMethod(): string;

    public function getRequestTarget(): string;

    public function getUri(): Uri;

    public function withMethod(string $method): Request;

    public function withRequestTarget(string $requestTarget): Request;

    public function withUri(Uri $uri, bool $preserveHost = false): Request;
}
