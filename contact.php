<?php
$title = 'MAME | 联系团队';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

	<!-- 页面内容Page Content -->
	<div class="container">

		<h1 class="page-header"><center>联系MAME团队</center></h1>
		
				<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				function checkForm(form)
				{
					var curvalue = "";
					for (var i = 0; i < form.radiobut.length; i++)
						if (form.radiobut[i].checked) curvalue = form.radiobut[i].value;

					if (curvalue == "faq") form.action = "http://wiki.mamedev.org/index.php?title=Frequently_Asked_Questions";
					else if (curvalue == "roms") form.action = "/links.php#link";
					else if (curvalue == "程序bug") form.action = "http://mametesters.org";
					else if (curvalue == "法律的|legal") form.action = "/contact2.php?=legal";
					else if (curvalue == "建议|submit") form.action = "http://wiki.mamedev.org/index.php?title=Submitting_Source_Code";
					else if (curvalue == "none") form.action = "/contact2.php?=team";
					else
					{
						alert("请选择以下选项之一，然后按下一步按钮。 (" + curvalue + ")");
						return false;
					}
					return true;
				}
				//]]>
				</script>

					<p>
					关于什么事您想和我们联系?
					</p>

					<form onsubmit="return checkForm(this)" name="email" method="post" action="#">
						<p>
						<input type="radio" name="radiobut" value="faq">
						我无法弄清楚如何使用该软件！
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="roms">
						我在哪里可以让ROM在MAME中运行？
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="bug">
						我想我在MAME中发现了一个错误，我想报告一下。
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="legal">
						我有法律问题或希望报告滥用MAME。
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="submit">
						我有一个新的ROM转储，我想提交。
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="submit">
						我对源代码进行了一些更改，并希望提交它们。
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="none">
						以上都不是。
						</input>
						</p>

						<input type="submit" name="submit" value="&nbsp;Next &gt;&nbsp;" class="btn btn-primary"/>
					</form>
		<br/><br/>
	</div>
	<!-- /.container -->

	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
