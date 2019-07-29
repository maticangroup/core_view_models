<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 29/07/19
 * Time: 13:51
 */

namespace App\FormModels\Media;


class ImageModel
{
    private $imageSerial;
    private $imageAlt;
    private $imageSize;
    private $url;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }


    /**
     * @return mixed
     */
    public function getImageSerial()
    {
        return $this->imageSerial;
    }

    /**
     * @param mixed $imageSerial
     */
    public function setImageSerial($imageSerial): void
    {
        $this->imageSerial = $imageSerial;
    }

    /**
     * @return mixed
     */
    public function getImageAlt()
    {
        return $this->imageAlt;
    }

    /**
     * @param mixed $imageAlt
     */
    public function setImageAlt($imageAlt): void
    {
        $this->imageAlt = $imageAlt;
    }

    /**
     * @return mixed
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

    /**
     * @param mixed $imageSize
     */
    public function setImageSize($imageSize): void
    {
        $this->imageSize = $imageSize;
    }
}