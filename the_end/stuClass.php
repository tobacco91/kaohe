<?php
    header("Content-Type:text/html;charset=utf-8");
    require_once 'db.php';
    set_time_limit(0);
    $pdoMysql = pdoMysql::getInstance();//pdo对象
    for($i = 0 ;$i < 999 ; $i++){
        $ch = curl_init();
        $num = 2015210001+$i;
        $tree = array();
        curl_setopt($ch, CURLOPT_URL,
         "http://jwzx.cqupt.edu.cn/pubStuKebiao.php?xh=".$num);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $data = curl_exec($ch);
        preg_match_all('/<td[^>]*>[\w\W]*?<\/td>/i', $data, $matches);
        
        foreach ($matches[0] as $key => $value) {
            $count = 0;
            $count++;
            preg_match_all('/\w*?-*\w*?\(*[\x7f-\xff]+\)*\/*:*\(*[\x7f-\xff]+\)*\w*|(?<=<br>)\w+(?=<br>)|(?<=&nbsp;)\w+/i', $value, $match);
            foreach ($match[0] as $key => &$v) {
                 $v = mb_convert_encoding($v,'utf8','gbk');
                    
            }
            //var_dump($match[0]);
            $tree = array_merge($tree,$match);     
        }
        var_dump($tree);
        //$sql = 'insert into stu_choice(stu_id,course_week,course_)'
       $tree = array_slice($tree, 9);

       unset($tree[15]);
       unset($tree[23]);
       unset($tree[31]);
       unset($tree[39]);
       unset($tree[47]);
       unset($tree[48]);
       unset($tree[49]);
       unset($tree[50]);
       unset($tree[51]);
       unset($tree[52]);
       unset($tree[53]);
       unset($tree[54]);
       unset($tree[55]);
       unset($tree[56]);
        var_dump($tree);
        foreach ($tree as $course) {
            //var_dump($course);
            if($course==null){
                $sql = "INSERT INTO all_course (  
                course_id,
                course_name,  
                course_teacher,
                course_room,
                course_type,
                course_keep,
                course_state,
                course_check
                )   
                SELECT '".  
                null."','".
                null."','".
                null."','".
                null."','".
                null."','".
                null."','".
                null."','".
                null
                ."'FROM DUAL  
                WHERE NOT EXISTS(  
                    SELECT course_check  
                    FROM all_course   
                    WHERE course_check = '".null."')";  
            $pdoMysql->query($sql);
            
            }else{
                 if(preg_match('/\d+/',$course[2])){
                    if($course[0]!=null){
                    $sql = "INSERT INTO all_course (  
                    course_id,  
                    course_name,
                    course_room,
                    course_type,
                    course_keep,
                    course_state,
                    course_check
                    )   
                SELECT '".  
                    $course[0]."','".
                    $course[1]."','".
                    $course[2]."','".
                    $course[3]."','".
                    $course[4]."','".
                    $course[5]."','".
                    
                    $course[0].$course[2].$course[3].$course[4].$course[5]
                ."'FROM DUAL  
                        WHERE NOT EXISTS(  
                        SELECT course_check  
                        FROM all_course   
                        WHERE course_check = '".$course[0].$course[2].$course[3].$course[4].$course[5]."')"; 
                 $pdoMysql->query($sql);
             }
             
                  if(count($course)>8){
                    $sql = "INSERT INTO all_course (  
                    course_id,  
                    course_name,
                    course_room,
                    course_type,
                    course_keep,
                    course_state,
                    course_check
                    )   
                SELECT '".  
                    $course[6]."','".
                    $course[7]."','".
                    $course[8]."','".
                    $course[9]."','".
                    $course[10]."','".
                    $course[11]."','".
                    $course[6].$course[8].$course[9].$course[10].$course[11]
                ."'FROM DUAL  
                        WHERE NOT EXISTS(  
                        SELECT course_check  
                        FROM all_course   
                        WHERE course_check = '".$course[6].$course[8].$course[9].$course[10].$course[11]."')"; 
                 $pdoMysql->query($sql);
                    }
                    if(count($course)>12){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[12]."','".
                        $course[13]."','".
                        $course[14]."','".
                        $course[15]."','".
                        $course[16]."','".
                        $course[17]."','".
                        
                        $course[12].$course[14].$course[15].$course[16].$course[17]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[12].$course[14].$course[15].$course[16].$course[17]."')"; 
                        $pdoMysql->query($sql);
                    }
                    if(count($course)>18){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[18]."','".
                        $course[19]."','".
                        $course[20]."','".
                        $course[21]."','".
                        $course[22]."','".
                        $course[23]."','".
                        
                        $course[18].$course[20].$course[21].$course[22].$course[23]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[18].$course[20].$course[21].$course[22].$course[23]."')"; 
                        $pdoMysql->query($sql);
                    }
                    if(count($course)>24){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[24]."','".
                        $course[25]."','".
                        $course[26]."','".
                        $course[27]."','".
                        $course[28]."','".
                        $course[29]."','".
                        
                        $course[24].$course[26].$course[27].$course[28].$course[29]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[24].$course[26].$course[27].$course[28].$course[29]."')"; 
                        $pdoMysql->query($sql);
                    }
                    if(count($course)>30){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[30]."','".
                        $course[31]."','".
                        $course[32]."','".
                        $course[33]."','".
                        $course[34]."','".
                        $course[35]."','".
                        
                        $course[30].$course[32].$course[33].$course[34].$course[35]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[30].$course[32].$course[33].$course[34].$course[35]."')"; 
                        $pdoMysql->query($sql);
                        if(count($course)>36){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[36]."','".
                        $course[37]."','".
                        $course[38]."','".
                        $course[39]."','".
                        $course[40]."','".
                        $course[41]."','".
                        
                        $course[36].$course[38].$course[39].$course[40].$course[41]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[36].$course[38].$course[39].$course[40].$course[41]."')"; 
                        $pdoMysql->query($sql);
                        
                        }
                        if(count($course)>45){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[42]."','".
                        $course[43]."','".
                        $course[44]."','".
                        $course[45]."','".
                        $course[46]."','".
                        $course[47]."','".
                        
                        $course[42].$course[44].$course[45].$course[46].$course[47]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[42].$course[44].$course[45].$course[46].$course[47]."')"; 
                        $pdoMysql->query($sql);
                    }}










                 }else{
                    $sql = "INSERT INTO all_course (  
                    course_id,
                    course_name,  
                    course_teacher,
                    course_room,
                    course_type,
                    course_keep,
                    course_state,
                    course_check
                    )   
                    SELECT '".  
                    $course[0]."','".
                    $course[1]."','".
                    $course[2]."','".
                    $course[3]."','".
                    $course[4]."','".
                    $course[5]."','".
                    $course[6]."','".
                    $course[0].$course[2].$course[3].$course[4].$course[5]
                    ."'FROM DUAL  
                    WHERE NOT EXISTS(  
                        SELECT course_check  
                        FROM all_course   
                        WHERE course_check = '".$course[0].$course[2].$course[3].$course[4].$course[5]."')"; 
                    $pdoMysql->query($sql);
                
                        if(count($course)>8){
                    $sql = "INSERT INTO all_course (  
                    course_id,  
                    course_name,
                    course_teacher,
                    course_room,
                    course_type,
                    course_keep,
                    course_state,
                    course_check
                    )   
                SELECT '".  
                    $course[7]."','".
                    $course[8]."','".
                    $course[9]."','".
                    $course[10]."','".
                    $course[11]."','".
                    $course[12]."','".
                    $course[13]."','".
                    $course[7].$course[8].$course[9].$course[10].$course[11]
                ."'FROM DUAL  
                        WHERE NOT EXISTS(  
                        SELECT course_check  
                        FROM all_course   
                        WHERE course_check = '".$course[7].$course[8].$course[9].$course[10].$course[11]."')"; 
                 $pdoMysql->query($sql);
                    }
                    if(count($course)>18){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_teacher,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        
                        $course[14]."','".
                        $course[15]."','".
                        $course[16]."','".
                        $course[17]."','".
                        $course[18]."','".
                        $course[19]."','".
                        $course[20]."','".
                        $course[14].$course[16].$course[17].$course[18].$course[19]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[14].$course[16].$course[17].$course[18].$course[19]."')"; 
                        $pdoMysql->query($sql);
                    }
                    if(count($course)>24){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_teacher,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        
                        $course[21]."','".
                        $course[22]."','".
                        $course[23]."','".
                        $course[24]."','".
                        $course[25]."','".
                        $course[26]."','".
                        $course[27]."','".
                        $course[21].$course[23].$course[24].$course[25].$course[26]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[21].$course[23].$course[24].$course[25].$course[26]."')"; 
                        $pdoMysql->query($sql);
                    }
                    if(count($course)>30){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_teacher,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        
                        $course[28]."','".
                        $course[29]."','".
                        $course[30]."','".
                        $course[31]."','".
                        $course[32]."','".
                        $course[33]."','".
                        $course[34]."','".
                        $course[28].$course[30].$course[31].$course[32].$course[33]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[28].$course[30].$course[31].$course[32].$course[33]."')"; 
                        $pdoMysql->query($sql);
                    }
                    if(count($course)>38){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_teacher,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[35]."','".
                        $course[36]."','".
                        $course[37]."','".
                        $course[38]."','".
                        $course[39]."','".
                        $course[40]."','".
                        $course[41]."','".
                        $course[35].$course[37].$course[38].$course[39].$course[40]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[35].$course[37].$course[38].$course[39].$course[40]."')"; 
                        $pdoMysql->query($sql);
                        if(count($course)>45){
                        $sql = "INSERT INTO all_course (  
                        course_id,  
                        course_name,
                        course_teacher,
                        course_room,
                        course_type,
                        course_keep,
                        course_state,
                        course_check
                        )   
                        SELECT '".  
                        $course[42]."','".
                        $course[43]."','".
                        $course[44]."','".
                        $course[45]."','".
                        $course[46]."','".
                        $course[47]."','".
                        $course[48]."','".
                        $course[42].$course[44].$course[45].$course[46].$course[47]
                        ."'FROM DUAL  
                            WHERE NOT EXISTS(  
                            SELECT course_check  
                            FROM all_course   
                            WHERE course_check = '".$course[42].$course[44].$course[45].$course[46].$course[47]."')"; 
                        $pdoMysql->query($sql);
                        
                        }}
                   
                 }
                 
                    
            
            }
            
        }

        
        curl_close($ch);
    }
?>



