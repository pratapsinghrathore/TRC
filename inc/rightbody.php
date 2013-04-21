<script type="text/javascript">
function quick_submit()
{
	var frm=document.frm_qc;
	var wspace=new RegExp(/\s+$/);

	var uname=frm.name.value;
	var ucom=frm.comments.value;
	var code=frm.enter_code.value;
	
	if(uname=="" || wspace.test(uname))
	{
		alert("You forgot to enter 'Name'");
		frm.name.focus();
		return false;
	}
	else if(ucom=="" || wspace.test(ucom)){
		alert("You forgot to enter 'Comments'");
		frm.comments.focus();
		return false;	
	}
	else if(code=="" || wspace.test(code)){
		alert("You forgot to enter 'Code'");
		frm.enter_code.focus();
		return false;	
	}
	else if(code!="" && isNaN(code)){
		alert("You forgot to enter 'Code' properly!");
		frm.enter_code.focus();
		return false;	
	}
}
</script>
<div class="body_bot_right">
<div class="log_bg"><p class="do">How do YOU like your tea?</p>
</div>
<?
	if(isset($_REQUEST['err'])){
		if($_REQUEST['err']==0){
?>
<div class="log_bg" style="text-align:center;">
<p class="do">Please enter code properly</p>
</div>
<?
	}
}
?>
<form action="sendmail.php" method="post" id="frm_qc" name="frm_qc" onsubmit="return quick_submit();">
<div class="log_back">
<div class="log_left"><p class="name">Name</p></div>
<div class="log_right"><input name="name" type="text" id="name" class="name_box" value="<?=$_SESSION['qcont_post']['name']?>"/></div>
<div class="clr"></div>
<div class="log_left"><p class="coments">Comments</p></div>
<div class="log_right"><textarea name="comments" cols="" rows="" id="comments" class="name_text"><?=$_SESSION['qcont_post']['comments']?></textarea></div>
<div class="clr"></div>
<div class="log_left"><p class="coments">Verification</p></div>
<div class="log_right"><img src="spam_image2.php"  height="23" /></div>
<div class="clr"></div>
<div class="log_left"><p class="name">&nbsp;</p></div>
<div class="log_right"><input name="enter_code" type="text" id="enter_code" class="name_box" maxlength="6"/></div>
<div class="clr"></div>
<div class="log_left"><p class="name">&nbsp;</p></div>
<div class="log_right"><input name="" type="image" src="images/submit.png" class="sub" /></div>
<div class="clr"></div>
</div>
<div><a href="#" onclick="javascript:quick_submit();return false;">
<img src="images/logbot.jpg" width="227" height="5" alt="" /></a>
</div>
</form>
<div class="quick">
<p class="tea_quick">Quick Links</p>
<p class="share"><a href="contactus.php">Share Your Feedback</a></p>
<p class="share">Find Us On</p>
<p class="facebook"><a href="http://www.facebook.com/#!/pages/The-Tea-Room-Co/204675459543334" target="_blank"><img src="images/facebook.png" width="24" height="24" alt="" /></a></p>
<p class=" twiter"><a href="#" target="_blank"><img src="images/twiter.png" width="24" height="24" alt="" /></a></p>
<!--http://www.linkedin.com/companies/the-tea-room-co-->
<p class=" twiter"><a href="http://www.linkedin.com/company/the-tea-room-co." target="_blank"><img src="images/linked.png" width="24" height="24" alt="" /></a></p>
 </div>
</div>