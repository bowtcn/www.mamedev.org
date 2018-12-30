<?php
// error_reporting(E_ALL);

$rootpath = $_SERVER['DOCUMENT_ROOT'] . '/';

$title = 'MAMEDEV.org | MAME项目之家';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- 全宽度图像标题与标志 -->
    <!-- 图像背景设置在全宽度的图片full-width-pics.css文件. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="_include/img/logo-mame.png" alt="">
    </header>

    <!-- 页面内容 -->
    <div class="container">

<?php 
if ($post == "") 
{
?>

        <!-- 营销图标部分 -->
        <div class="row">
            <center><h1 class="page-header">欢迎来到MAME开发团队的官方网站</h1></center>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check"></i> 什么是MAME</h4>
				</div>
				<div class="panel-body">
					<p>MAME是一个多用途的仿真框架。</p>
					<p>MAME的目的是保存数十年的软件历史。随着电子技术的不断涌现，MAME阻止了这个重要的“复古”软件被丢失和遗忘。这是通过记录硬件及其功能来实现的。MAME的源代码作为此文档。该软件可用的事实主要是为了验证文档的准确性（如何证明您已经忠实地重新创建了硬件？）。随着时间的推移，MAME（最初代表多街机器模拟器）吸收了姐妹项目MESS（多模拟器超级系统），因此MAME现在记录了各种各样的（主要是复古的）计算机，视频游戏控制台和计算器，以及最初关注的街机视频游戏。</p>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check"></i> 许可证|License</h4>
				</div>
				<div class="panel-body">
				MAME的项目作为一个整体下的条款分布 <a href="http://opensource.org/licenses/GPL-2.0">GNU通用公共许可证，2 </ 一 >（GPL-2.0）时，由于它包含在多个GPL兼容许可下提供的代码。
				绝大部分的文件（超过90％，包括核心文件）下的 <a href="http://opensource.org/licenses/BSD-3-Clause">BSD -3-条款许可</ 一 >和我们会鼓励新贡献者根据此许可证分发文件。
<br/>
请注意，MAME是Gregory Ember的注册商标，并且必须获得使用“MAME”名称，徽标或文字标记的许可。
				</div>
			</div>
        </div>
        <!-- /.row -->

        <!-- 支持的平台部分 -->
        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="page-header">支持的平台</h2></center>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <center><i class="fa fa-windows fa-5x"></i><br/><br/><a href="release.php" class="btn btn-success"><h2>下载 Download</h2></a><br/><br/></center>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
				<center><i class="fa fa-apple fa-5x"></i><br/><br/><a href="http://wiki.mamedev.org/index.php/SDL_Supported_Platforms" class="btn btn-success"><h2>下载 Download</h2></a><br/><br/></center>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <center><i class="fa fa-linux fa-5x"></i><br/><br/><a href="http://wiki.mamedev.org/index.php/SDL_Supported_Platforms" class="btn btn-success"><h2>下载 Download</h2></a><br/><br/></center>
            </div>
        </div>
        <!-- /.row -->
<?php 
}
?>

        <!-- 文章部分 -->
        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="page-header">News</h2></center>
            </div>
	    <!-- 导航栏 -->
    <div class="row">
	<?php
        if ($pagenum == "" && $post == "")
	{
		echo("\t<div id=\"new-news-nav" . "\" class=\"col-md-4 col-sm-4 col-xs-4\">\n");
        	echo("\t\t<center><a title=\"&lt; Newer News" . "\" rel=\"prev\" href=\"/" . $prevurl . "\" class=\"btn btn-success btn-sm\" disabled=\"disabled\">" . "&lt; Newer" . "</a></center>\n");
        	echo("\t\t</div>\n");
	}
	else
	{
		echo("\t<div id=\"new-news-nav" . "\" class=\"col-md-4 col-sm-4 col-xs-4\">\n");
        	echo("\t\t<center><a title=\"&lt; Newer News" . "\" rel=\"prev\" href=\"/" . $prevurl . "\" class=\"btn btn-success btn-sm\">" . "&lt; Newer" . "</a></center>\n");
        	echo("\t\t</div>\n");
	}
	?>
        <div class="col-md-4 col-sm-4 col-xs-4"></div>
        <?php
		echo("\t<div id=\"old-news-nav" . "\" class=\"col-md-4 col-sm-4 col-xs-4\">\n");
		echo("\t\t<center><a title=\"Older News &gt;" . "\" rel=\"next\" href=\"/" . $nexturl . "\" class=\"btn btn-success btn-sm\">" . "Older &gt;" . "</a></center>\n");
		echo("\t\t</div>\n");
	?>
	</div>
    <!-- /.row -->
<?php 
	if (count($entries) == 0)
		echo("<p>找不到匹配的项目！</p>");

	for ($index = 0; $index < count($entries); $index++)
	{
		$entry = $entries[$index];
		$data = file($postpath . "/" . $entry);
		$title = trim(strip_tags($data[0]));
		$number = getpostnumber($entry);

		echo("\t\t\t\t\t<div id=\"post-" . $number . "\" class=\"col-md-8\">\n");
		echo("\t\t\t\t\t\t<h2><a title=\"Permanent Link to " . $title . "\" rel=\"bookmark\" href=\"/?p=" . $number . "\">" . $title . "</a></h2>\n");
		echo("\t\t\t\t\t\t<small>" . date("d M Y", getposttimestamp($entry)) . "</small>\n");
		echo("\t\t\t\t\t\t<div class=\"entry\">\n");
		for ($line = 1; $line < count($data); $line++)
			echo("\t\t\t\t\t\t\t" . $data[$line]);
		echo("\t\t\t\t\t\t</div>\n");
		echo("\t\t\t\t\t</div>\n");
	}
?>
		<!-- 帖子结束 -->
    </div>
    <div class="row"></div> 
    <!-- 导航栏 -->
    <div class="row">
	<?php
        if ($pagenum == "" && $post == "")
	{
		echo("\t<div id=\"new-news-nav" . "\" class=\"col-md-4 col-sm-4 col-xs-4\">\n");
        	echo("\t\t<center><a title=\"&lt; Newer News" . "\" rel=\"prev\" href=\"/" . $prevurl . "\" class=\"btn btn-success btn-sm\" disabled=\"disabled\">" . "&lt; Newer" . "</a></center>\n");
        	echo("\t\t</div>\n");
	}
	else
	{
		echo("\t<div id=\"new-news-nav" . "\" class=\"col-md-4 col-sm-4 col-xs-4\">\n");
        	echo("\t\t<center><a title=\"&lt; Newer News" . "\" rel=\"prev\" href=\"/" . $prevurl . "\" class=\"btn btn-success btn-sm\">" . "&lt; Newer" . "</a></center>\n");
        	echo("\t\t</div>\n");
	}
	?>
        <div class="col-md-4 col-sm-4 col-xs-4"></div>
	<?php
		echo("\t<div id=\"old-news-nav" . "\" class=\"col-md-4 col-sm-4 col-xs-4\">\n");
		echo("\t\t<center><a title=\"Older News &gt;" . "\" rel=\"next\" href=\"/" . $nexturl . "\" class=\"btn btn-success btn-sm\">" . "Older &gt;" . "</a></center>\n");
		echo("\t\t</div>\n");
	?>
	</div>
    <!-- /.row -->
    <!-- /.container -->
	<br/><br/><br/>
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
