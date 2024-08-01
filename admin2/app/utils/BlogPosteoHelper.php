<?php
require_once '../utils/FileHelper.php';
require_once '../utils/JsonHelper.php';

class BlogPosteoHelper {
    private const ERROR_ID_NOT_PROVIDED = 'Post ID not provided';
    private const ERROR_POST_NOT_FOUND = "Post not found";

    public static function validateAndGetId(): int {

        $data = JsonHelper::getDecodedJson();

        if (!isset($data['id']) || !is_numeric($data['id'])) {
            error_log(self::ERROR_ID_NOT_PROVIDED);
            throw new InvalidArgumentException(self::ERROR_ID_NOT_PROVIDED);
        }
        return (int)$data['id'];
    }

    public static function getAndValidatePostInfo(int $id): array {
        $postInfo = ModelPosteo::getPostById($id);
        if (!$postInfo) {
            error_log(self::ERROR_POST_NOT_FOUND);
            throw new Exception(self::ERROR_POST_NOT_FOUND);
        }
        return $postInfo;
    }

    public static function getImagePaths(): array {
        $data = JsonHelper::getDecodedJson();

        return [
            $data['image1'] ?? null,
            $data['image2'] ?? null
        ];
    }

    public static function deleteImagesFromPost(array $images): void {
        foreach ($images as $image) {
            if ($image) {
                FileHelper::deleteIndividualImage($image);
            }
        }
    }
}