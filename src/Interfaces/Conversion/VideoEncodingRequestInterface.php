<?php

namespace Uploadcare\Interfaces\Conversion;

/**
 * Request for video encoding.
 */
interface VideoEncodingRequestInterface
{
    /**
     * @return int|null
     */
    public function getHorizontalSize();

    /**
     * @return int|null
     */
    public function getVerticalSize();

    /**
     * @return string|null
     */
    public function getResizeMode();

    /**
     * @return string|null
     */
    public function getQuality();

    /**
     * @return string
     */
    public function getFormat();

    /**
     * @return string|null
     */
    public function getStartTime();

    /**
     * @return string|null
     */
    public function getEndTime();

    /**
     * @return int
     */
    public function getThumbs();
}
