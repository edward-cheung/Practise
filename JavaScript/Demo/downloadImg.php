    <?php
    /**
     * 图片代理下载程序
     * @filename downloadImg.php
     * @author Zjmainstay
     * @website http://www.zjmainstay.cn
     * @usage 存储于http://localhost目录下
     */
    $filename = urldecode($_GET['file']);
    if(preg_match('#/([^/]+)$#i', $filename, $match)) {
        $dir = dirname(__FILE__) . '/downloadImg/';
        if(!is_dir($dir)) @mkdir($dir, 0755);
        $saveFile = $dir . $match[1];
        file_put_contents($saveFile, file_get_contents($filename));
        echo "Success!";
    } else {
        echo "Fail!";
    }
    //自动关闭窗口程序（打开窗口过多，不友好）
    echo '<script type="text/javascript">window.close();</script>';