<?php

class PhotoDownload
{
    const CDN_URL = 'https://thumb.photo-ac.com';

    public function download($params)
    {
        $size = empty($params['size']) ? 's' : $params['size'];
        $linkThumbnail = self::CDN_URL . "{$size}.jpeg";
    }
}
