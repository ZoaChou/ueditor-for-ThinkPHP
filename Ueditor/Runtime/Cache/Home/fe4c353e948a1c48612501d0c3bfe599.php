<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="none">
    <title>ueditor DEMO</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="http://libs.baidu.com/jquery/2.0.3/jquery.min.js"></script>
    <!--<![endif]-->
<script type="application/javascript">
    var editorUrl = '<?php echo (WEB_URL); ?>/<?php echo C('DEFAULT_MODULE');?>';
</script>
</head>
<body>
<script id="editor" type="text/plain" style="width:1110px;height:500px;">默认初始化内容</script>

    <script type="text/javascript" charset="utf-8" src="<?php echo (WEB_URL); ?>/Home/ueditor/third-party/webuploader/webuploader.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (WEB_URL); ?>/Home/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (WEB_URL); ?>/Home/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (WEB_URL); ?>/Home/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (WEB_URL); ?>/Home/ueditor/ueditor.parse.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var $ = jQuery;

            //初始化编辑器
            uParse('.content',{
                'liiconpath':'<?php echo (WEB_URL); ?>/ueditor/themes/ueditor-list/'    //使用 '/' 开头的绝对路径
            })
            var ue = UE.getEditor('editor');

            //初始化编辑器内容
            ue.ready(function(){
                //延时加载本地保存内容，避免无法获取本地保存内容的问题
                setTimeout(function(){
                    ue.execCommand('insertHtml', ue.execCommand("getlocaldata"));
                },100);
            });
        });

    </script>

</body>
</html>