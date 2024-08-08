<?php
/**
 * JsonHelper
 *
 * Helper class to handle JSON input from HTTP requests.
 */
class JsonHelper {
    /**
     * Retrieves and decodes JSON input from a POST request.
     *
     * This method reads the raw input from the request body, decodes the JSON,
     * and returns it as an associative array.
     *
     * @return array The decoded JSON data as an associative array.
     * @throws InvalidArgumentException If the input is not valid JSON.
     */
    public static function getDecodedJson(): array {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidArgumentException('Invalid JSON input: ' . json_last_error_msg());
        }

        return $data;
    }
}