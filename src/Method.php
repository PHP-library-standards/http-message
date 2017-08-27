<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

interface Method
{
    public const
        HEAD    = 'HEAD',
        GET     = 'GET',
        POST    = 'POST',
        PUT     = 'PUT',
        PATCH   = 'PATCH',
        DELETE  = 'DELETE',
        PURGE   = 'PURGE',
        OPTIONS = 'OPTIONS',
        TRACE   = 'TRACE',
        CONNECT = 'CONNECT';
}
