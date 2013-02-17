<!-- class_delete_dialog to delete class in the classes page -->
<div id="class_delete_dialog" title="حذف صف" class='dialog_div'>
	<?php 
	$att=array('id'=>'delete_class_form');

	echo form_open('',$att);

	echo '<p><label>' .'هل أنت متأكد من حذف الصف:</label>'.'<span id = \'class_span\'></span></p>';

	$delete_att=array('id'=>'delete_input_id',
			'name'=>'delete_input');

	echo form_input($delete_att);

	echo form_submit('submit','موافق');




	echo form_close();
	?>
</div>




<!-- modify_class_dialog to modify a class in the classes page -->
<div id="class_modify_dialog" title="تعديل الصف" class='dialog_div' >
	<?php
	$levels = $this->mhome->get_levels();

	$class_modify_input_att = array('id'    => 'class_modify_input_id',
									'name'  => 'class_modify_input_name',
									'value' => '');

	$class_hidden_past_name = array('id'  => 'hidden_past_class_id',
									'name'=> 'hidden_past_class_id',
									'style' => 'display:none;'
									);


	$att = array('id' => 'modify_class_form');

	echo form_open('', $att);

	echo '<p><label>المرحلة:</label> '. form_dropdown('class_level_modify_name',$levels,'','class="level_drop"').'</p>';

	echo '<p><label> :اسم الصف</label> ' . form_input($class_modify_input_att,'','class=required');

	echo form_input($class_hidden_past_name);

	echo form_submit('submit', 'تعديل');




	echo form_close();
	?>
</div>
<!-- Insert Class form -->
<div id="add_class_dialog" title="إضافة صف" class='dialog_div'>
	<?php 
	$att=array('id'=>'class_insert_form');
	$levels = $this->mhome->get_levels();
	echo form_open('',$att);
	echo '<p><label>المرحلة:</label>'. form_dropdown('aqsa_level2',$levels,'','class="level_drop"').'</p>';
	echo '<p><label>الصف:</label>'. form_input('aqsa_class2','','class=required').'</p>';
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	?>
</div>







<!-- modify_level_dialog to modify a level in the levels page -->
<div id="level_modify_dialog" title="تعديل المرحلة" class='dialog_div' >
	<?php
	$level_modify_att = array('id'  => 'level_modify_id',
							  'name'=> 'level_modify_name');

	$level_hidden_past_name = array('id'  => 'hidden_past_level_id',
									'name'=> 'hidden_past_level_name',
									'style' => 'display:none;');



	$att = array('id' => 'modify_level_form');

	echo form_open('', $att);

	echo ' :</label>اسم المرحلة ' . form_input($level_modify_att,'','class=required');

	echo form_input($level_hidden_past_name);

	echo form_submit('submit', 'تعديل');




	echo form_close();
	?>
</div>

<<<<<<< HEAD
<!-- modify_mark_dialog to modify a mark in the marks page -->
<div id="mark_modify_dialog" title="تعديل العلامة" class='dialog_div' >
	<?php
	$mark_modify_att = array('id'  => 'mark_modify_id',
							  'name'=> 'mark_modify_name');

	$mark_hidden_past_name = array('id'  => 'hidden_past_mark_id',
									'name'=> 'hidden_past_mark_name',
									'style' => 'display:none;');



	$att = array('id' => 'modify_mark_form');

	echo form_open('', $att);

	echo ' :</label>العلامة الجديدة ' . form_input($mark_modify_att,'','class=required');

	echo form_input($mark_hidden_past_name);

	echo form_submit('submit', 'تعديل');




	echo form_close();
	?>
</div>

=======
>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
<!-- Modify Room form -->
<div id="room_modify_dialog" title="تعديل الفصل" class='dialog_div'>
	<?php 

		$room_hidden_past_id = array('id'  => 'hidden_past_room_id',
		'name'=> 'hidden_past_room_name', 'style' => 'display:none;');
         $att=array('id'=>'room_modify_form');
         $levels = $this->mhome->get_levels();
         $classes = array(''=>'');
         $rooms = array(''=>'');
         echo form_open('',$att);
         echo '<p><label>المرحلة:</label>'. form_dropdown('room_insert_level_name',$levels,'','class="level_drop"').'</p>';
         echo '<p><label>الصف:</label>'. form_dropdown('room_insert_class_name',$classes,'','class="class_drop"').'</p>';
         echo '<p><label>الفصل:</label>'. form_input('room_insert_name','','class=required').'</p>';
         echo form_input($room_hidden_past_id);

         echo '<p>'.form_submit('submit','تعديل').'</p>';
         echo form_close();
         ?>
</div>
<!-- modify teacher dialog -->
<div id="teacher_modify_dialog" title="تعديل بيانات معلم" class='dialog_div'>

	<?php 

			$teacher_hidden_past_id = array('id'  => 'hidden_past_teacher_id',
											'name'=> 'hidden_past_teacher_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'teacher_modify_form');
			echo form_open('',$att);

			echo form_input($teacher_hidden_past_id);
				
			echo form_close();



			?>

</div>

<!-- modify user dialog -->
<div id="user_modify_dialog" title="تعديل بيانات مستخدم" class='dialog_div'>

	<?php 

			$user_hidden_past_id = array('id'  => 'hidden_past_user_id',
											'name'=> 'hidden_past_user_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'user_modify_form');
			echo form_open('',$att);

			echo form_input($user_hidden_past_id);
				
			echo form_close();



			?>

</div>

<!-- modify student dialog -->
<div id="student_modify_dialog" title="تعديل بيانات طالب" class='dialog_div'>

	<?php 

			$student_hidden_past_id = array('id'  => 'hidden_past_student_id',
											'name'=> 'hidden_past_student_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'student_modify_form');
<<<<<<< HEAD
			$levels = $this->mhome->get_levels();
			$begin_para = array(''=>'');

			echo form_open('',$att);
			echo '<p><label>المرحلة:</label>'. form_dropdown('st_level',$levels,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('st_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('st_room',$begin_para ,'','class="room_drop"').'</p>';
=======
			echo form_open('',$att);

>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
			echo form_input($student_hidden_past_id);
				
			echo form_close();



			?>

</div>

<<<<<<< HEAD
<!--  student details dialog -->
<div id="student_details_dialog" title="بيانات طالب" class='dialog_div'>



</div>

=======
>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
<!-- modify permission dialog -->
<div id="permission_modify_dialog" title="تعديل سماحيات مستخدم" class='dialog_div'>

	<?php 

			$permission_hidden_past_id = array('id'  => 'hidden_past_permission_id',
											'name'=> 'hidden_past_permission_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'permission_modify_form');
			$levels = $this->mhome->get_levels();
			$users = $this->mhome->get_users();
			$begin_para = array(''=>'');
			echo form_open('',$att);
			echo '<p><label>المرحلة:</label>'. form_dropdown('permit_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('permit_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('permit_room',$begin_para ,'','class="room_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('permit_subject',$begin_para,'','class="subject_drop"').'</p>';
			echo '<p><label>اسم المستخدم:</label>'. form_dropdown('permit_username',$users).'</p>';
			
				
			echo form_input($permission_hidden_past_id);
				
			echo '<p>'.form_submit('submit','تعديل').'</p>';
			echo form_close();



			?>

</div>

<!-- modify subject dialog -->
<div id="subject_modify_dialog" title="تعديل بيانات مادة" class='dialog_div'>

	<?php 

			$subject_hidden_past_id = array('id'  => 'hidden_past_subject_id',
											'name'=> 'hidden_past_subject_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'subject_modify_form');
			$levels = $this->mhome->get_levels();
			$begin_para = array(''=>'');
			echo form_open('',$att);
			echo '<p><label>المرحلة:</label>'. form_dropdown('subject_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('subject_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_input('subject_name','','class=required').'</p>';
			
				
			echo form_input($subject_hidden_past_id);
				
			echo '<p>'.form_submit('submit','تعديل').'</p>';
			echo form_close();



			?>

</div>

<!-- modify test dialog -->
<div id="test_modify_dialog" title="تعديل بيانات معيار" class='dialog_div'>

	<?php 

			$test_hidden_past_id = array('id'  => 'hidden_past_test_id',
											'name'=> 'hidden_past_test_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'test_modify_form');
			$levels = $this->mhome->get_levels();
			$begin_para = array(''=>'');
			echo form_open('',$att);
			echo '<p><label>المرحلة:</label>'. form_dropdown('test_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('test_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('test_subject',$begin_para,'','class="subject_drop"').'</p>';
			echo '<p><label>المعيار:</label>'. form_input('test_name','','class=required').'</p>';
			
				
			echo form_input($test_hidden_past_id);
				
			echo '<p>'.form_submit('submit','تعديل').'</p>';
			echo form_close();



			?>

</div>

<!-- modify skill dialog -->
<div id="skill_modify_dialog" title="تعديل بيانات معيار" class='dialog_div'>

	<?php 

			$skill_hidden_past_id = array('id'  => 'hidden_past_skill_id',
											'name'=> 'hidden_past_skill_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'skill_modify_form');
			$levels = $this->mhome->get_levels();
			$tests = $this-> mhome -> get_tests();
			$begin_para = array(''=>'');
			echo form_open('',$att);
			echo form_input($skill_hidden_past_id);
			echo '<p><label>المرحلة:</label>'. form_dropdown('skill_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('skill_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('skill_subject',$begin_para,'','class="subject_drop"').'</p>';
			echo '<p><label>المعيار:</label>'. form_dropdown('skill_test',$begin_para ,'','class="test_drop"').'</p>';
			echo '<p><label>المهارة:</label>'. form_input('skill_name','','class=required').'</p>';
			echo '<p><label>أقل درجة:</label>'. form_input('min_grade','','class=required number').'</p>';
			echo '<p><label>أعلى درجة:</label>'. form_input('max_grade','','class=required number').'</p>';
			
				
			echo form_input($test_hidden_past_id);
				
			echo '<p>'.form_submit('submit','تعديل').'</p>';
			echo form_close();



			?>

</div>



<!-- modify assign dialog -->
<div id="assign_modify_dialog" title="تعديل إسناد المعلم" class='dialog_div'>

	<?php 

			$assign_hidden_past_id = array('id'  => 'hidden_past_assign_id',
											'name'=> 'hidden_past_assign_name',
											'style' => 'display:none;'
											);
			$att=array('id'=>'assign_modify_form');
			$levels = $this->mhome->get_levels();
			$teachers = $this-> mhome -> get_teachers();
			$begin_para = array(''=>'');
			echo form_open('',$att);
			echo '<p><label>المرحلة:</label>'. form_dropdown('assign_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('assign_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('assign_room',$begin_para ,'','class="room_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('assign_subject',$begin_para,'','class="subject_drop"').'</p>';
<<<<<<< HEAD
			echo '<p><label>اسم المعلم:</label>'. form_dropdown('assign_teacher',$teachers,'','class="teacher_drop"').'</p>';
=======
			echo '<p><label>اسم المعلم:</label>'. form_dropdown('assign_teacher',$teachers,'','class=""').'</p>';
>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
			
				
			echo form_input($assign_hidden_past_id);
				
			echo '<p>'.form_submit('submit','تعديل').'</p>';
			echo form_close();



			?>

</div>

<!-- add skill form dialog-->
<div id="skill_add_dialog" title="إضافة مهارة" class='dialog_div'>
	<?php 
	$test_hidden_id1 = array('id'  => 'hidden_test_id',
			'name'=> 'hidden_test_name',
			'style'=> 'display:none;'
	);

	$att=array('id'=>'skill_add_form');
	echo form_open('',$att);
	echo form_input($test_hidden_id1);
	echo '<p><label>اسم المهارة:</label>'. form_input('skill_name','','class=required').'</p>';
	echo '<p><label>أقل درجة:</label>'. form_input('min_grade','','class=required number').'</p>';
	echo '<p><label>أعلى درجة:</label>'. form_input('max_grade','','class=required number').'</p>';
	
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	?>
</div>

<!-- add level form dialog-->
<div id="level_add_dialog" title="إضافة مرحلة" class='dialog_div'> 
	<?php 
	echo "<div id='insert_level_div'>";
	$att=array('id'=>'level_insert_form');
	echo form_open('',$att);
	echo '<p><label>المرحلة:</label>'. form_input('level_insert_name','','class=required').'</p>';
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	echo "</div>";
	?>
</div>



<!-- add room form dialog-->
<div id="room_insert_dialog" title="إضافة فصل" class='dialog_div'>
	<?php 
	echo "<div id='add_room_div'>";
	$att=array('id'=>'room_add_form');
	$levels = $this->mhome->get_levels();
	$begin_para = array(''=>'');
	echo form_open('',$att);
	echo '<p><label>المرحلة:</label>'. form_dropdown('room_level',$levels ,'','class="level_drop"').'</p>';
	echo '<p><label>الصف:</label>'. form_dropdown('room_class',$begin_para ,'','class="class_drop"').'</p>';
	echo '<p><label>الفصل:</label>'. form_input('room_name','','class=required').'</p>';
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	echo "</div>";
	?>
</div>


<!-- add teacher form dialog-->
<div id="teacher_insert_dialog" title="إضافة معلم" class='dialog_div'>
	<?php 
			echo "<div id='insert_teacher_div' style=''>";
			$att=array('id'=>'teacher_insert_form');
			echo form_open('',$att);
			echo '<p><label>اسم المعلم:</label>'. form_input('teacher_name','','class=required').'</p>';
			echo '<p><label>رقم الهوية:</label>'. form_input('teacher_idnumber','','class=required number').'</p>';
			echo '<p><label>مكان الولادة:</label>'. form_input('teacher_birthplace','').'</p>';
			echo '<p><label>تاريخ الميلاد:</label>'. form_input('teacher_birthdate','','class="datep"').' يوم-شهر-سنة </p>';
			echo '<p><label>التخصص:</label>'. form_input('teacher_specialist','').'</p>';
			echo '<p><label>تاريخ التخرج:</label>'. form_input('teacher_gradedate','','class="datep"').' يوم-شهر-سنة </p>';
			echo '<p><label>المؤهل الدراسي:</label>'. form_input('teacher_qual','').'</p>';
			echo '<p><label>اسم الجامعة:</label>'. form_input('teacher_university','').'</p>';
			echo '<p><label>الجنسية:</label>'. form_input('teacher_nationality','').'</p>';
			echo '<p><label>إيميل المعلم:</label>'. form_input('teacher_email','','class=email').'</p>';
			echo '<p><label>جوال المعلم:</label>'. form_input('teacher_mobile','','class=number').'</p>';

			echo '<p>'.form_submit('submit','إضافة').'</p>';
			echo form_close();
			echo "</div>";
	?>
</div>

<!-- add subject form dialog-->
<div id="subject_insert_dialog" title="إضافة مادة" class='dialog_div'>
	<?php 
	$levels = $this->mhome->get_levels();
	$begin_para = array(''=>'');
	echo "<div id='insert_subject_div' style=''>";
	$att=array('id'=>'subject_insert_form');
	echo form_open('',$att);
	echo '<p><label>اسم المادة:</label>'. form_input('subject_name','','class=required').'</p>';
	echo '<p><label>المرحلة:</label>'. form_dropdown('subject_level',$levels ,'','class="level_drop"').'</p>';
	echo '<p><label>الصف:</label>'. form_dropdown('subject_class',$begin_para ,'','class="class_drop"').'</p>';
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	echo "</div>";
	?>
</div>

<!-- add test form dialog-->
<div id="test_insert_dialog" title="إضافة معيار" class='dialog_div'>
	<?php 
			$levels = $this->mhome->get_levels();
			$begin_para = array(''=>'');
			echo "<div id='insert_test_div' style=''>";
			$att=array('id'=>'test_insert_form');
			echo form_open('',$att);
			echo '<p><label>اسم المعيار:</label>'. form_input('test_name','','class=required').'</p>';
			echo '<p><label>المرحلة:</label>'. form_dropdown('test_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('test_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('test_subject',$begin_para,'','class="subject_drop"').'</p>';
			echo '<p>'.form_submit('submit','إضافة').'</p>';
			echo form_close();
			echo "</div>";
	?>
</div>

<!-- add skill form dialog-->
<div id="skill_insert_dialog" title="إضافة مهارة" class='dialog_div'>
	<?php 
	$levels = $this->mhome->get_levels();
	$begin_para = array(''=>'');
	echo "<div id='insert_skill_div' style=''>";
	$att=array('id'=>'skill_insert_form');
	echo form_open('',$att);
	echo '<p><label>اسم المهارة:</label>'. form_input('skill_name','','class=required').'</p>';
	echo '<p><label>المرحلة:</label>'. form_dropdown('skill_level',$levels ,'','class="level_drop"').'</p>';
	echo '<p><label>الصف:</label>'. form_dropdown('skill_class',$begin_para ,'','class="class_drop"').'</p>';
	echo '<p><label>المادة:</label>'. form_dropdown('skill_subject',$begin_para,'','class="subject_drop"').'</p>';
	echo '<p><label>المعيار:</label>'. form_dropdown('skill_test',$begin_para ,'','class="test_drop"').'</p>';
	echo '<p><label>أقل درجة:</label>'. form_input('min_grade','','class=required number').'</p>';
	echo '<p><label>أعلى درجة:</label>'. form_input('max_grade','','class=required number').'</p>';
	
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	echo "</div>";
	?>
</div>

<!-- add user form dialog-->
<div id="user_insert_dialog" title="إضافة مستخدم" class='dialog_div'>
	<?php 
			echo "<div id='insert_user_div' style=''>";
			$att=array('id'=>'user_insert_form');
			echo form_open('',$att);
			echo '<p><label>اسم المستخدم:</label>'. form_input('user_name','','class=required').'</p>';
			echo '<p><label>اسم الدخول:</label>'. form_input('user_username','','class=required').'</p>';
			echo '<p><label>كلمة السر:</label>'. form_input('user_password','','class=required').'</p>';
			echo '<p><label>البريد الإلكتروني:</label>'. form_input('user_email','','class=email').'</p>';
			echo '<p><label>الهاتف:</label>'. form_input('user_mobile','','class=number').'</p>';
			$role_array= array('admin'=>'مدير','user'=>'مستخدم');
			echo '<p><label>المسمى الوظيفي :</label>'. form_dropdown('user_role',$role_array).'</p>';
			echo '<p>'.form_submit('submit','إضافة').'</p>';
			echo form_close();
			echo "</div>";
	?>
</div>

<!-- add permission form dialog-->
<div id="permission_insert_dialog" title="إضافة سماحية" class='dialog_div'>
	<?php 
			$levels = $this->mhome->get_levels();
			$users = $this->mhome->get_users();
				
			$begin_para = array(''=>'');

			echo "<div id='insert_permission_div' style=''>";
			$att=array('id'=>'permission_insert_form');
			echo form_open('',$att);
			echo '<p><label>اسم الدخول للمستخدم:</label>'. form_dropdown('permit_username',$users).'</p>';
			echo '<p><label>المرحلة:</label>'. form_dropdown('permit_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('permit_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('permit_room',$begin_para ,'','class="room_drop"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('permit_subject',$begin_para,'','class="subject_drop"').'</p>';
			echo '<p>'.form_submit('submit','إضافة').'</p>';
			echo form_close();
			echo "</div>";
	?>
</div>

<!-- add assign form dialog-->
<div id="assign_insert_dialog" title="اسناد المعلمين إلى المواد" class='dialog_div'> 
	<?php 
	echo "<div id='insert_assign_div' style=''>";
	$att=array('id'=>'assign_insert_form');
	$levels = $this->mhome->get_levels();
<<<<<<< HEAD
	$teachers = $this->mhome->get_teachers();

		
	$begin_para = array(''=>'');
	echo form_open('',$att);
	echo '<p><label>اسم المعلم:</label>'. form_dropdown('assign_teacher',$teachers ,'','class="teacher_drop"').'</p>';
=======
		
	$begin_para = array(''=>'');
	echo form_open('',$att);
	echo '<p><label>اسم المعلم:</label>'. form_input('assign_teacher','','class=required').'</p>';
>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
	echo '<p><label>المرحلة:</label>'. form_dropdown('assign_level',$levels ,'','class="level_drop"').'</p>';
	echo '<p><label>الصف:</label>'. form_dropdown('assign_class',$begin_para ,'','class="class_drop"').'</p>';
	echo '<p><label>الفصل:</label>'. form_dropdown('assign_room',$begin_para ,'','class="room_drop"').'</p>';
	echo '<p><label>المادة:</label>'. form_dropdown('assign_subject',$begin_para,'','class="subject_drop"').'</p>';
	echo '<p>'.form_submit('submit','إضافة').'</p>';
	echo form_close();
	echo "</div>";
	?>
</div>

<!-- add mark form dialog-->
<div id="mark_insert_dialog" title="إضافة علامة" class='dialog_div'>
	<?php 
			echo "<div id='insert_mark_div' style=''>";
			$att=array('id'=>'mark_insert_form');
			$levels = $this->mhome->get_levels_permit();
			
			$begin_para = array(''=>'');
			echo form_open('',$att);
			echo '<p><label>المرحلة:</label>'. form_dropdown('mark_level',$levels ,'','class="level_drop_permit"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('mark_class',$begin_para ,'','class="class_drop_permit"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('mark_room',$begin_para ,'','class="room_drop_permit"').'</p>';
			echo '<p><label>المادة:</label>'. form_dropdown('mark_subject',$begin_para,'','class="subject_drop_permit"').'</p>';
			echo '<p><label>المعيار:</label>'. form_dropdown('mark_test',$begin_para ,'','class="test_drop_permit"').'</p>';
			echo '<p><label>المهارة:</label>'. form_dropdown('mark_skill',$begin_para ,'','class="skill_drop_permit"').'</p>';
			echo '<p><label>اسم الطالب:</label>'. form_dropdown('mark_student',$begin_para ,'','class="student_drop_permit"').'</p>';
			echo '<p><label>العلامة:</label>'. form_input('mark_value','','class=required number').'</p>';
			echo '<p>'.form_submit('submit','إضافة').'</p>';
			echo form_close();
			echo "</div>";
	?>
</div>


<!-- add student form dialog-->
<div id="student_insert_dialog" title="إضافة طالب " class='dialog_div'>
	<?php 
	echo "<div id='insert_student_div' style=''>";
			$att=array('id'=>'student_insert_form');
			$levels = $this->mhome->get_levels();			
			$begin_para = array(''=>'');
<<<<<<< HEAD
			echo '<div id="upload_div"><form>
		
		إدراج صورة الطالب:
		<input id="file_upload" name="file_upload" type="file" multiple="false"/>
		</form>
		<img id = "st_pic" />
		</div>';
			echo form_open('',$att);
			echo '<input type="hidden" name="st_picture" id="hidden_pic"/>';
=======
			
			echo form_open('',$att);
>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
			echo '<p><label> الجنسية:</label>'. form_input('st_nationality','').'</p>';
			echo '<p><label> رقم جواز السفر:</label>'. form_input('st_passnum','','class=required number').'</p>';
			echo '<p><label> رقم السجل المدني للطالب/الإقامة:</label>'. form_input('st_urbannum','').'</p>';
			echo '<p><label> تاريخ الهوية:</label>'. form_input('st_iddate','','class="datep"').'</p>';
			echo '<p><label> تاريخ انتهاء الإقامة:</label>'. form_input('st_stayvalid','','class="datep"').'</p>';
			echo '<p><label> الاسم الأول بالعربي:</label>'. form_input('st_fna','','class=required').'</p>';
			echo '<p><label> الاسم الأول بالأنجليزي:</label>'. form_input('st_fne','').'</p>';
			echo '<p><label> اسم الأب بالعربي:</label>'. form_input('st_ffna','','class=required').'</p>';
			echo '<p><label> اسم الأب بالانجليزي:</label>'. form_input('st_ffne','').'</p>';
			echo '<p><label> اسم الجد بالعربي:</label>'. form_input('st_gfna','').'</p>';
			echo '<p><label> اسم الجد بالإنجليزي:</label>'. form_input('st_gfne','').'</p>';
			echo '<p><label> اسم العائلة بالعربي:</label>'. form_input('st_lna','','class=required').'</p>';
			echo '<p><label> اسم العائلة بالإنجليزي:</label>'. form_input('st_lne','').'</p>';
			echo '<p><label> تاريخ ميلاد الطالب:</label>'. form_input('st_birthdate','','class="datep"').'</p>';
			echo '<p><label> مكان الميلاد:</label>'. form_input('st_birthplace','').'</p>';
			echo '<p><label> اسم ولي أمر الطالب الرباعي:</label>'. form_input('st_guardname','').'</p>';
			echo '<p><label> تاريخ ميلاد ولي الأمر:</label>'. form_input('st_guardbirth','','class="datep"').'</p>';
			echo '<p><label> مكان ميلاد ولي الأمر:</label>'. form_input('st_guardplace','').'</p>';
			echo '<p><label> رقم هوية ولي الأمر:</label>'. form_input('st_guardidnum','').'</p>';
			echo '<p><label> تاريخ الهوية لولي الأمر:</label>'. form_input('st_guardiddate','','class="datep"').'</p>';
			echo '<p><label> فئة دم الطالب:</label>'. form_input('st_blood','').'</p>';
			echo '<p><label> نوع السكن:</label>'. form_input('st_livingplace','').'</p>';
			echo '<p><label> ملكية السكن:</label>'. form_input('st_livingowning','').'</p>';
			echo '<p><label> الحالة الإجتماعية لولي أمر الطالب:</label>'. form_input('st_guardmarital','').'</p>';
			echo '<p><label> المنطقة الإدارية:</label>'. form_input('st_region','').'</p>';
			echo '<p><label> المدينة:</label>'. form_input('st_city','').'</p>';
			echo '<p><label> الحي:</label>'. form_input('st_district','').'</p>';
			echo '<p><label> الشارع الرئيسي:</label>'. form_input('st_mainstr','').'</p>';
			echo '<p><label> الشارع الفرعي:</label>'. form_input('st_substr','').'</p>';
			echo '<p><label> رقم المنزل:</label>'. form_input('st_homenum','').'</p>';
			echo '<p><label> بجوار:</label>'. form_input('st_homebeside','').'</p>';
			echo '<p><label> الهاتف 1:</label>'. form_input('st_phone1','','class=number').'</p>';
			echo '<p><label> الهاتف 2:</label>'. form_input('st_phone2','','class=number').'</p>';
			echo '<p><label> الجوال (هاتف التواصل):</label>'. form_input('st_mobile','','class=number').'</p>';
			echo '<p><label> البريد الإلكتروني:</label>'. form_input('st_email','','class=email').'</p>';
			echo '<p><label> عمل ولي الأمر:</label>'. form_input('st_guardjob','').'</p>';
			echo '<p><label> جهة العمل:</label>'. form_input('st_guardcomp','').'</p>';
			echo '<p><label> العنوان في الإجازة:</label>'. form_input('st_vacaddress','').'</p>';
			echo '<p><label> الرمز البريدي:</label>'. form_input('st_postal','').'</p>';
			echo '<p><label> صندوق البريد:</label>'. form_input('st_mailbox','').'</p>';
			echo '<p><label> الفاكس:</label>'. form_input('st_fax','','class=number').'</p>';
			echo '<p><label> وسيلة النقل:</label>'. form_input('st_vehicle','').'</p>';
			echo '<p><label> حالة التسجيل:</label>'. form_input('st_joinstate','').'</p>';
			echo '<p><label> هل يسكن في قرية:</label>'. form_input('st_villageask','').'</p>';
			echo '<p><label> اسم القرية:</label>'. form_input('st_village','').'</p>';
			echo '<p><label> اسم قريب الطالب:</label>'. form_input('st_kinname','').'</p>';
			echo '<p><label> عنوان قريب الطالب:</label>'. form_input('st_kinaddress','').'</p>';
			echo '<p><label> عدد أفراد الأسرة:</label>'. form_input('st_familynum','','class=number').'</p>';
			echo '<p><label> عدد الأخوة:</label>'. form_input('st_bronum','','class=number').'</p>';
			echo '<p><label> عدد الأخوات:</label>'. form_input('st_sisnum','','class=number').'</p>';
			echo '<p><label> تسلسل الطالب:</label>'. form_input('st_seq','','class=number').'</p>';
			echo '<p><label> هل الأب على قيد الحياة:</label>'. form_input('st_fatheralive','').'</p>';
			echo '<p><label> هل الأم على قيد الحياة:</label>'. form_input('st_motheralive','').'</p>';
			echo '<p><label> مستوى تعليم الأب:</label>'. form_input('st_fatheredulevel','').'</p>';
			echo '<p><label> مستوى تعليم الأم:</label>'. form_input('st_motheredulevel','').'</p>';
			echo '<p><label> مع من يسكن الطالب:</label>'. form_input('st_livingwith','').'</p>';
<<<<<<< HEAD
			echo '<p><label>المرحلة:</label>'. form_dropdown('st_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('st_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('st_room',$begin_para ,'','class="room_drop"').'</p>';
			echo '<p>'.form_submit('submit','إضافة').'</p>';
			echo form_close();
			echo "</div>";

	
	?>
</div>
=======

			echo '<p><label>المرحلة:</label>'. form_dropdown('st_level',$levels ,'','class="level_drop"').'</p>';
			echo '<p><label>الصف:</label>'. form_dropdown('st_class',$begin_para ,'','class="class_drop"').'</p>';
			echo '<p><label>الفصل:</label>'. form_dropdown('st_room',$begin_para ,'','class="room_drop"').'</p>';
				



			echo '<p>'.form_submit('submit','إضافة').'</p>';


			echo form_close();
			echo "</div>";
	
	?>
</div>

>>>>>>> d8bb4d94a0e1d9b86b0d865b4b135c29c235e7a0
</body>
</html>


