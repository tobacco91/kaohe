<?php
 define('DB_HOST','localhost');
 define('DB_USER','root');
 define('DB_PAW','');
 define('DB_NAME','stu_class');
 define('DB_TYPE','mysql');
 define('DB_CHARSET','utf8');

?>

<!-- 表stu_class
stu_class stu_id state

表student_chocie
stu_id cid course_week course_number stu_class

表all_course
cid course_id course_teacher course_room  course_type course_keep course_state 

表id_course
course_id course_name -->

//  if($course[6]!=null){
                //     $sql = "INSERT INTO all_course (  
                //     course_id,  
                //     course_name,
                //     course_room,
                //     course_type,
                //     course_keep,
                //     course_state,
                //     course_check
                //     )   
                // SELECT '".  
                //     $course[6]."','".
                //     $course[7]."','".
                //     $course[8]."','".
                //     $course[9]."','".
                //     $course[10]."','".
                //     $course[11]."','".
                    
                //     $course[6].$course[8].$course[9].$course[10].$course[11]
                // ."'FROM DUAL  
                //         WHERE NOT EXISTS(  
                //         SELECT course_check  
                //         FROM all_course   
                //         WHERE course_check = '".$course[6].$course[8].$course[9].$course[10].$course[11]."')"; 
                //  $pdoMysql->query($sql);
                //     }
                //     if($course[12]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[12]."','".
                //         $course[13]."','".
                //         $course[14]."','".
                //         $course[15]."','".
                //         $course[16]."','".
                //         $course[17]."','".
                        
                //         $course[12].$course[14].$course[15].$course[16].$course[17]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[12].$course[14].$course[15].$course[16].$course[17]."')"; 
                //         $pdoMysql->query($sql);
                //     }
                //     if($course[18]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[18]."','".
                //         $course[19]."','".
                //         $course[20]."','".
                //         $course[21]."','".
                //         $course[22]."','".
                //         $course[23]."','".
                        
                //         $course[18].$course[20].$course[21].$course[22].$course[23]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[18].$course[20].$course[21].$course[22].$course[23]."')"; 
                //         $pdoMysql->query($sql);
                //     }
                //     if($course[24]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[24]."','".
                //         $course[25]."','".
                //         $course[26]."','".
                //         $course[27]."','".
                //         $course[28]."','".
                //         $course[29]."','".
                        
                //         $course[24].$course[26].$course[27].$course[28].$course[29]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[24].$course[26].$course[27].$course[28].$course[29]."')"; 
                //         $pdoMysql->query($sql);
                //     }
                //     if($course[30]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[30]."','".
                //         $course[31]."','".
                //         $course[32]."','".
                //         $course[33]."','".
                //         $course[34]."','".
                //         $course[35]."','".
                        
                //         $course[30].$course[32].$course[33].$course[34].$course[35]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[30].$course[32].$course[33].$course[34].$course[35]."')"; 
                //         $pdoMysql->query($sql);
                //         if($course[36]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[36]."','".
                //         $course[37]."','".
                //         $course[38]."','".
                //         $course[39]."','".
                //         $course[40]."','".
                //         $course[41]."','".
                        
                //         $course[36].$course[38].$course[39].$course[40].$course[41]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[36].$course[38].$course[39].$course[40].$course[41]."')"; 
                //         $pdoMysql->query($sql);
                        
                //         }
                //         if($course[42]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[42]."','".
                //         $course[43]."','".
                //         $course[44]."','".
                //         $course[45]."','".
                //         $course[46]."','".
                //         $course[47]."','".
                        
                //         $course[42].$course[44].$course[45].$course[46].$course[47]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[42].$course[44].$course[45].$course[46].$course[47]."')"; 
                //         $pdoMysql->query($sql);
                //     }
























                //     if($course[7]!=null){
                //     $sql = "INSERT INTO all_course (  
                //     course_id,  
                //     course_name,
                //     course_teacher,
                //     course_room,
                //     course_type,
                //     course_keep,
                //     course_state,
                //     course_check
                //     )   
                // SELECT '".  
                //     $course[7]."','".
                //     $course[8]."','".
                //     $course[9]."','".
                //     $course[10]."','".
                //     $course[11]."','".
                //     $course[12]."','".
                //     $course[13]."','".
                //     $course[7].$course[8].$course[9].$course[10].$course[11]
                // ."'FROM DUAL  
                //         WHERE NOT EXISTS(  
                //         SELECT course_check  
                //         FROM all_course   
                //         WHERE course_check = '".$course[7].$course[8].$course[9].$course[10].$course[11]."')"; 
                //  $pdoMysql->query($sql);
                //     }
                //     if($course[14]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_teacher,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                        
                //         $course[14]."','".
                //         $course[15]."','".
                //         $course[16]."','".
                //         $course[17]."','".
                //         $course[18]."','".
                //         $course[19]."','".
                //         $course[20]."','".
                //         $course[14].$course[16].$course[17].$course[18].$course[19]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[14].$course[16].$course[17].$course[18].$course[19]."')"; 
                //         $pdoMysql->query($sql);
                //     }
                //     if($course[21]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_teacher,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                        
                //         $course[21]."','".
                //         $course[22]."','".
                //         $course[23]."','".
                //         $course[24]."','".
                //         $course[25]."','".
                //         $course[26]."','".
                //         $course[27]."','".
                //         $course[21].$course[23].$course[24].$course[25].$course[26]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[21].$course[23].$course[24].$course[25].$course[26]."')"; 
                //         $pdoMysql->query($sql);
                //     }
                //     if($course[28]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_teacher,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                        
                //         $course[28]."','".
                //         $course[29]."','".
                //         $course[30]."','".
                //         $course[31]."','".
                //         $course[32]."','".
                //         $course[33]."','".
                //         $course[34]."','".
                //         $course[28].$course[30].$course[31].$course[32].$course[33]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[28].$course[30].$course[31].$course[32].$course[33]."')"; 
                //         $pdoMysql->query($sql);
                //     }
                //     if($course[35]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_teacher,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[35]."','".
                //         $course[36]."','".
                //         $course[37]."','".
                //         $course[38]."','".
                //         $course[39]."','".
                //         $course[40]."','".
                //         $course[41]."','".
                //         $course[35].$course[37].$course[38].$course[39].$course[40]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[35].$course[37].$course[38].$course[39].$course[40]."')"; 
                //         $pdoMysql->query($sql);
                //         if($course[42]!=null){
                //         $sql = "INSERT INTO all_course (  
                //         course_id,  
                //         course_name,
                //         course_teacher,
                //         course_room,
                //         course_type,
                //         course_keep,
                //         course_state,
                //         course_check
                //         )   
                //         SELECT '".  
                //         $course[42]."','".
                //         $course[43]."','".
                //         $course[44]."','".
                //         $course[45]."','".
                //         $course[46]."','".
                //         $course[47]."','".
                //         $course[48]."','".
                //         $course[42].$course[44].$course[45].$course[46].$course[47]
                //         ."'FROM DUAL  
                //             WHERE NOT EXISTS(  
                //             SELECT course_check  
                //             FROM all_course   
                //             WHERE course_check = '".$course[42].$course[44].$course[45].$course[46].$course[47]."')"; 
                //         $pdoMysql->query($sql);
                        
                //         }