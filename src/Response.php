<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

interface Response
{
    public function getReasonPhrase(): string;

    public function getStatusCode(): int;

    public function withStatus(int $code, string $reasonPhrase = ''): Response;
}
