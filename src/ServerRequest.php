<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

interface ServerRequest extends Request
{
    public function getAttribute(string $name, $default = null): string;

    public function getAttributes(): iterable;

    public function getCookieParams(): iterable;

    public function getParsedBody(): iterable;

    public function getQueryParams(): iterable;

    public function getServerParams(): iterable;

    public function getUploadedFiles(): iterable;

    public function withAttribute(string $name, $value): ServerRequest;

    public function withCookieParams(iterable $cookies): ServerRequest;

    public function withParsedBody(iterable $data): ServerRequest;

    public function withQueryParams(iterable $query): ServerRequest;

    public function withServerParams(iterable $server): ServerRequest;

    public function withUploadedFiles(iterable $uploadedFiles): ServerRequest;

    public function withoutAttribute(string $name): ServerRequest;
}
