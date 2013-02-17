<!doctype html>
<html lang="ar" dir="rtl">
<head>

<meta charset="UTF-8" />
<title>Alaqsa database</title>

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/uploadify.css">
<script language="javascript" type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>js/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url(); ?>css/style.css"
	type="text/css" />
<!--[if IE 6]><link rel="stylesheet" href="<?= base_url(); ?>css/style.ie6.css" type="text/css"  /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="<?= base_url(); ?>css/style.ie7.css" type="text/css"  /><![endif]-->
<script type="text/javascript" src="<?= base_url(); ?>css/script.js"></script>

<link rel="stylesheet"
	href="<?= base_url(); ?>css/jquery-ui/css/theme/jquery-ui-1.10.0.custom.min.css"
	type="text/css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/home_style.css"
	type="text/css" />


<script src="<?= base_url();?>js/jquery.uploadify.min.js"></script>

<script src="<?= base_url();?>js/home.js"></script>
<script src="<?= base_url();?>js/report.js"></script>
<script
	src="<?= base_url();?>css/jquery-ui/js/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'fileTypeDesc' : 'Image Files',
				'fileTypeExts' : '*.gif; *.jpg; *.png', 
				'swf'      : '<?= base_url() ?>uploadify/uploadify.swf',
				'uploader' : '<?= base_url() ?>uploadify/uploadify.php',
				'onUploadComplete' : function(file) {
				var filename= file.name;
			$('#st_pic').attr("src",'<?= base_url()?>st_pics/' + filename.split('.',1).pop() + '_' + <?= $timestamp;?>+ '.' +filename.split('.',2).pop());
			$('#hidden_pic').val('<?= base_url()?>st_pics/' +filename.split('.',1).pop() + '_' + <?= $timestamp;?>+ '.' +filename.split('.',2).pop());
        } 
				
			});
		});
	</script>
</head>
<body dir="rtl">
	<div id="art-page-background-middle-texture">
		<div id="art-main">
			<div class="art-sheet">
				<div class="art-sheet-tl"></div>
				<div class="art-sheet-tr"></div>
				<div class="art-sheet-bl"></div>
				<div class="art-sheet-br"></div>
				<div class="art-sheet-tc"></div>
				<div class="art-sheet-bc"></div>
				<div class="art-sheet-cl"></div>
				<div class="art-sheet-cr"></div>
				<div class="art-sheet-cc"></div>
				<div class="art-sheet-body">
					<div class="art-nav" dir="rtl">
						<ul class="art-menu" dir="rtl">
							<?php 
							echo "<div class='logout_div'>";
							echo ' السيد:'.$this->session->userdata('user_name');
							echo '<br /><a href='.base_url().'home/do_logout>تسجيل الخروج</a>';
							echo '</div>';

							$user_role=$this->session->userdata('user_role');

							switch($user_role)
							{
								case 'admin':
									?>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_users"><span
									class="l"></span><span class="r"></span><span class="t">
										المستخدمين </span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_permissions"> <span
									class="l"></span><span class="r"></span><span class="t">إدارة
										السماحيات</span>
							</a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_levels"> <span
									class="l"></span><span class="r"></span><span class="t">المراحل</span>
							</a>
							</li>

							<li><a href="<?= base_url(); ?>home/c_panel/aq_classes"><span
									class="l"></span><span class="r"></span><span class="t"> الصفوف</span>
							</a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_rooms"><span
									class="l"></span><span class="r"></span><span class="t"> الفصول</span>
							</a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_teachers"><span
									class="l"></span><span class="r"></span><span class="t">
										المعلمين </span> </a>
							</li>

							<li><a href="<?= base_url(); ?>home/c_panel/aq_assign"><span
									class="l"></span><span class="r"></span><span class="t">
										الإسناد </span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_students"><span
									class="l"></span><span class="r"></span><span class="t"> الطلاب
								</span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_subjects"><span
									class="l"></span><span class="r"></span><span class="t"> المواد
								</span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_tests"><span
									class="l"></span><span class="r"></span><span class="t">
										المعايير </span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_skills"><span
									class="l"></span><span class="r"></span><span class="t">
										المهارات </span> </a>
							</li>

							<li><a href="<?= base_url(); ?>home/c_panel/aq_reports"><span
									class="l"></span><span class="r"></span><span class="t">
										التقارير</span> </a>
							</li>
							<?php 
							break;
					case 'user':	?>

							<li><a href="<?= base_url(); ?>home/c_panel/aq_tests"><span
									class="l"></span><span class="r"></span><span class="t">
										المعايير </span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_skills"><span
									class="l"></span><span class="r"></span><span class="t">
										المهارات </span> </a>
							</li>
							<li><a href="<?= base_url(); ?>home/c_panel/aq_marks"><span
									class="l"></span><span class="r"></span><span class="t">
										الدرجات </span> </a>
							</li>
							<?php
							break;

			} ?>

						</ul>
					</div>