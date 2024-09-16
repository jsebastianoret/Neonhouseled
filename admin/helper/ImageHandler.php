<?php
class ImageHandler
{
  private $extensions = ['webp', 'jpg', 'jpeg', 'png', 'avif'];
  private $quality = 75;

  public function getQuality()
  {
    return $this->quality;
  }

  public function setQuality($quality)
  {
    $this->quality = $quality;
  }

  public function validateImageFormat($imageName)
  {
    $extension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    return in_array($extension, $this->extensions, true);
  }

  public function convertImageToWebp($sourcePath, $destinationPath)
  {
    $imagick = new \Imagick($sourcePath);
    $imagick->setImageFormat('webp');
    $imagick->setImageCompressionQuality($this->quality);
    $imagick->writeImage($destinationPath);
    $imagick->clear();
    $imagick->destroy();
  }
}
