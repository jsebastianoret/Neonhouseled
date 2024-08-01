<?php
class FileHelper {
    private const ERROR_PREFIX= "FileHelper Error: ";

    /**
     * Deletes a file at the specified path.
     *
     * @param string $filePath The path to the file to be deleted.
     * @throws Exception If the file cannot be deleted.
     */

    public static function deleteFile(string $filePath):void {
        if (!file_exists($filePath)) {
            $errorMessage = 'File not found: ' . $filePath;
            error_log(self::ERROR_PREFIX. $errorMessage . $filePath);
            throw new Exception($errorMessage);
        }

        if (!unlink($filePath)) {
            $errorMessage = 'Could not delete file: ' . $filePath;
            error_log(self::ERROR_PREFIX . $errorMessage);
            throw new Exception($errorMessage);
        }

        error_log('File deleted successfully: ' . $filePath);
    }

    /**
     * Deletes an individual image file.
     *
     * @param string|null $image The path to the image file to be deleted.
     * @throws Exception If the image cannot be deleted.
     */
    public static function deleteIndividualImage($image):void {
        if (!$image) {
            $error_message = 'Image is null or false: ' . $image;
            error_log(self::ERROR_PREFIX. $error_message);
            return;
        }

        if (!file_exists($image)) {
            error_log(self::ERROR_PREFIX.' Image not found: ' . $image);
            return;
        }

        if (!unlink($image)) {
            $error_message = 'Could not delete image: ' . $image;
            error_log(self::ERROR_PREFIX.$error_message);
            throw new Exception($error_message);
        }

        error_log('Image deleted successfully: ' . $image);
    }
}