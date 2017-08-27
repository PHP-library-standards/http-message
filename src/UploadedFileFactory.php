<?php
/**
 * @package   Pls\Http\Message
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Message;

interface UploadedFileFactory
{
    /**
     * Creates a new uploaded file.
     *
     * If a string is used to create the file, a temporary resource will be
     * created with the content of the string.
     *
     * If a size is not provided it will be determined by checking the size of
     * the file.
     *
     * @see http://php.net/manual/features.file-upload.post-method.php
     * @see http://php.net/manual/features.file-upload.errors.php
     *
     * @param string|resource $file
     * @param integer         $size in bytes
     * @param integer         $error           PHP file upload error
     * @param string          $clientFilename
     * @param string          $clientMediaType
     *
     * @throws MessageException MUST be thrown if the file resource is not
     *     readable.
     *
     * @return UploadedFile
     */
    public function createUploadedFile(
        $file,
        int $size = null,
        int $error = \UPLOAD_ERR_OK,
        string $clientFilename = null,
        string $clientMediaType = null
    ): UploadedFile;
}
