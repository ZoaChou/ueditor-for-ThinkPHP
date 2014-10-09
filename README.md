ueditor-for-ThinkPHP
====================

基于ThinkPHP的ueditor类，考虑到可移植性所以没有制作成ThinkPHP的Library（如需使用Library可参考：https://github.com/Nintendov/Ueditor-thinkphp ），理论上只需修改少量地方就可以支持所有版本的ThinkPHP。

使用说明

安装：

将ueditor-for-ThinkPHP\Ueditor\Home\Controller\目录下的 EditorController.class.php合并到你的项目Controller中（ThinkPHP3.2以前的版本可删除命名空间后修改为Action合并到你的项目中） ，将ueditor-for-ThinkPHP\public\Home\ueditor\目录合并到你的项目静态文件目录下（ueditor的版本号为：1.4.3，并且已将webUploader的版本更新到：0.1.5）。

配置：
  EditorController.class.php中的getConfig，方法可以根据你的需要配置参数，需要注意的是image(scrawl/file...)PathFormat采用的是相对路径，如需修改可参考ueditor-for-ThinkPHP\Ueditor\Common\Conf\config.php中的配置文件。（默认情况下会上传到本项目的ueditor-for-ThinkPHP\public\Home\upload\目录下。）


使用：

    1.加载jQuery;
    2.配置js全局变量editorUrl为EditorController的url：
    <script type="application/javascript">
      var editorUrl = 'YourEditorControllerUrl';
    </script>
    3.加载ueditor。


    view视图中添加代码demo详见：ueditor-for-ThinkPHP\Ueditor\Home\View\Index\index.html 

备注：ueditor-for-ThinkPHP\public\Home\ueditor\中的配置已经修改为根据editorUrl实现跨文件配置EditorController的url，所以必须设定全局变量editorUrl后才能加载ueditor。
