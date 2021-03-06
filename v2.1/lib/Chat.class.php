<?php
class Chat extends EaseServer {

    /**
     * 上传文件
     * @param string $file
     * @return array
     */
    public function chatFiles($file){
        $auth = $this->getTokenOnFile();
        $data = "@" . $file;
        $header[] = 'Authorization: Bearer ' . $auth;
        $header[] = 'restrict-access: true';
        $header[] = 'Content-Type: application/json';
        $Curl = new Curl($this->url . '/chatfiles', 'POST');
        $Curl->createHeader($header);
        $Curl->createData($data);
        return $Curl->execute();
    }

    /**
     * 下载图片,语音文件
     */
    public function downloadFile(){}

    /**
     * 下载缩略图
     */
    public function downloadThumb(){}

    /**
     * 获取最新的聊天记录
     * @return array
     */
    public function getMessagesByNew($limit = 20){
        $auth = $this->getTokenOnFile();
        $header[] = 'Authorization: Bearer ' . $auth;
        $url = $this->url . '/chatmessages?ql' . urlencode('=order+by+timestamp+desc&limit=' . $limit);
        $Curl = new Curl($url, 'GET');
        $Curl->createHeader($header);
        return $Curl->execute();
    }

    /**
     * 获取某个时间段内的消息
     */
    public function getMessagesByTimes($start, $end){
        $ql = 'select * where timestamp>' . $start . ' and timestamp<' . $end . ' order by timestamp desc';
        $url = $this->url . '/chatmessages?ql=' . url_enc($ql);
        $header[] = 'Authorization: Bearer ' . $this->getTokenOnFile();
        $header[] = 'Content-Type: application/json';
        $Curl = new Curl($url, 'GET');
        $Curl->createHeader($header);
        return $Curl->execute();
    }

    /**
     * 分页获取数据
     */
    public function getMessagesByPage($limit){
        $ql = 'select+*+order+by+timestamp+desc';
        $url = $this->url . '/chatmessages?ql=' . url_enc($ql) . '&limit=' . $limit;
        $header[] = 'Authorization: Bearer ' . $this->getTokenOnFile();
        $Curl = new Curl($url, 'GET');
        $Curl->createHeader($header);
        return $Curl->execute();
    }
}