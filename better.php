<?php

class PhotoDownload
{
    const CDN_URL = 'http://example.com';

    public function download($params)
    {
        $size = empty($params['size']) ? 's' : $params['size'];
        $downloadLink = self::CDN_URL . "{$size}.jpeg";

        if(!file_exists($downloadLink)){
          header("Location: http://example.com");
        } else {
          header('Content-Type: application/octet-stream');
          header("Content-Transfer-Encoding: Binary");
          header("Content-disposition: attachment; filename=\"".$downloadLink."\"");
        }
    }
}
