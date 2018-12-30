<?php
$title = 'MAME | 联系团队';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

		<center><h1 class="page-header">联系MAME团队</h1></center>
		
				<p>
					如果您因任何原因需要联系MAME开发团队，请填写下面的表格。使
					确保选择要发送给它的相应人员或组。
					</p>
				
					<p>
					如果您认为自己在MAME中发现了错误，或者在使用该软件时遇到问题，请返回
					<a href="http://mamedev.org/contact.html"> 主要联系页面</a> 并选择适当的选项。
					发送到此地址的有关错误或用户支持的电子邮件将被完全忽略。
					</p>

				<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				function setupMenu(form)
				{
					var defSelection = location.href.split("?")[1];
					if (defSelection != null)
					{
						var i;
						for (i = 0; i < form.recipient.length; i++)
							if (form.recipient.options[i].value == defSelection)
								form.recipient.selectedIndex = i;
					}
				}

				function checkForm(form)
				{
					if (form.recipient.value == "dummy" || form.recipient.value == "-")
					{
						alert("请从弹出列表中选择一个收件人.");
						return false;
					}
					if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value)))
					{
						alert("请输入有效的电子邮件地址.")
						return false;
					}
					form.action="sendmail.php";
					return true;
				}
				//]]>
				</script>

					<form onsubmit="return checkForm(this)" name="email" method="post" action="#">
							<input type="hidden" name="success" value="sent.html" />

							<div class="input-group">	
								<span class="input-group-addon">发送至：</span>
								<select name="recipient" class="form-control">
									<option selected="selected" value="dummy">选择收件人...</option>
									<option value="-">---</option>
									<option value="webmaster">MAMEDev.org 网站管理员</option>
									<option value="legal">MAME许可/商标问题</option>
									<option value="-">---</option>
									<option value="team">MAME团队（一般）</option>
								</select>
							</div>
							<br/>
							<div class="input-group">	
								<span class="input-group-addon">来自：</span>
								<input type="text" size="50" name="email" class="form-control" />
							</div>
							<br/>
							<div class="input-group">	
								<span class="input-group-addon">主题：</span>
								<input type="text" size="50" name="subject" class="form-control"/>
							</div>
							<br/>
							<div class="input-group">	
								<span class="input-group-addon">消息：</span>
								<textarea name="comment" cols="75" rows="10"class="form-control"></textarea>
							</div>
							<br/>
							<div class="input-group">	
								<input type="submit" name="submit" value="Send" class="btn btn-success"/>
								<input type="reset" name="reset" value="Reset" class="btn btn-warning"/>
							</div>
					</form>
		
	</div>
    <!-- /.container -->
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
