<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

use Pls\Stream\Stream;

interface Message
{
    public function getBody(): Stream;

    public function getHeaders(): iterable;

    public function getHeader(string $name): iterable;

    public function getHeaderLine(string $name): string;

    public function getProtocolVersion(): string;

    public function hasHeader(string $name): bool;

    public function withAddedHeader(string $name, $value): Message;

    public function withBody(Stream $body): Message;

    public function withHeader(string $name, $value): Message;

    public function withProtocolVersion(string $version): Message;

    public function withoutHeader(string $name): Message;
}
