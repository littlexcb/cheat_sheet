<?php require_once('./header.php'); ?>
<body>

<div id="preloader">
    <div id="status">
        <p class="center-text">
            Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>

<div class="top-deco"></div>

<div class="content">
    <div class="header">
        <a href="#" class="homepage-logo">
            <h1 style="font-size:28px;height:60px;">️程序员小抄</h1>
        </a>
        <a href="../index.html" class="go-home">INDEX</a>
        <a href="#" class="go-menu">MENU</a>
        <a href="#" class="go-back">CLOSE</a>
    </div>
    <div class="decoration"></div>
    
    <div class="navigation">
        <div class="corner-deco"></div>
        <div class="navigation-wrapper">
            <div class="navigation-item">
                <a href="../html_sheet/1.html" class="home-icon">HTML</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../css_sheet/1.html" class="home-icon">CSS</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../javascipt_sheet/1.html" class="home-icon">Javascript</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../php_sheet/1.html" class="home-icon">PHP</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../mysql_sheet/1.html" class="home-icon">MySQL</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../others_sheet/1.html" class="home-icon">Others</a>
                <em class="inactive-menu"></em>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container no-bottom">
        <h3>HTML5音频</h3>
        <p>
        
        </p>
    </div>
    
    <div class="decoration"></div>

    <div class="container no-bottom">
        <h4>介绍</h4>
    </div>
    
    <div class="container no-bottom">              
        <p>
<pre>
         <!--content-->
HTML5 提供了播放音频的标准。
Web 上的音频
直到现在，仍然不存在一项旨在网页上播放音频的标准。
今天，大多数音频是通过插件（比如 Flash）来播放的。然而，并非所有浏览器都拥有同样的插件。
HTML5 规定了一种通过 audio 元素来包含音频的标准方法。
audio 元素能够播放声音文件或者音频流。
音频格式
当前，audio 元素支持三种音频格式：
<table>
  <tr><td></td>  <td> IE 9 </td>   <td>Firefox 3.5 </td> <td>Opera 10.5</td> <td> Chrome 3.0 </td> <td> Safari 3.0 </td> </tr>
  <tr> <td>Ogg Vorbis</td><td></td> <td>√</td> <td>√</td> <td>√</td>  <td></td> </tr>    
  <tr> <td>MP3</td><td>√</td> <td></td> <td></td> <td>√</td>  <td>√</td> </tr>  
  <tr> <td>Wav</td><td></td> <td>√</td> <td>√</td> <td></td>  <td>√</td> </tr>         
</table>
如何工作
如需在 HTML5 中播放音频，您所有需要的是：
<pre>
<p style="border:1px solid black;background-color:#ccc;" class="clipboard">
<?php
   echo htmlspecialchars('
    <audio src="song.ogg" controls="controls">
    </audio>');
?>
</p>
</pre>
control 属性供添加播放、暂停和音量控件。
audio 之间插入的内容是供不支持 audio 元素的浏览器显示的：
实例
<pre>
<?php
   echo htmlspecialchars('
    <audio src="song.ogg" controls="controls">
Your browser does not support the audio tag.
</audio>');
?>
</pre>

亲自试一试
上面的例子使用一个 Ogg 文件，适用于Firefox、Opera 以及 Chrome 浏览器。
要确保适用于 Safari 浏览器，音频文件必须是 MP3 或 Wav 类型。
audio 元素允许多个 source 元素。source 元素可以链接不同的音频文件。浏览器将使用第一个可识别的格式：
实例

<pre>
<?php
   echo htmlspecialchars('
<audio controls="controls">
  <source src="song.ogg" type="audio/ogg">
  <source src="song.mp3" type="audio/mpeg">
Your browser does not support the audio tag.
</audio>');
?>
</pre>

亲自试一试
Internet Explorer
Internet Explorer 8 不支持 audio 元素。在 IE 9 中，将提供对 audio 元素的支持。
audio 标签的属性
<table>
<tr><td>属性</td>  <td>值</td>   <td>描述</td></tr>
<tr><td>autoplay</td>    <td>autoplay</td>    <td>如果出现该属性，则音频在就绪后马上播放。</td></tr>
<tr><td>controls</td>    <td>controls</td>    <td>如果出现该属性，则向用户显示控件，比如播放按钮。</td></tr>
<tr><td>loop</td>    <td>loop</td>    <td>如果出现该属性，则每当音频结束时重新开始播放。</td></tr>
<tr><td>preload</td> <td>preload</td> 
<td>如果出现该属性，则音频在页面加载时进行加载，并预备播放。
如果使用 "autoplay"，则忽略该属性。</td></tr>
<tr><td>src</td> <td>url</td> <td>要播放的音频的 URL。</td></tr>
</table>

</pre>
         <!--content-->
        </p>
        
       
    </div>

    <div class="decoration"></div>

   <div><span><a href="./3.php">上一条</a></span><span>&nbsp;&nbsp;<a href="./2.php">下一条</a></span></div>

 
    
</div>

<div class="bottom-deco"></div>



</body>
</html>

























