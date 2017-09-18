<?php
    $user_info=array();
    $ip=$_SERVER['REMOTE_ADDR'];
    $language=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
    $software=substr($_SERVER['HTTP_USER_AGENT'],13,26);
    $user_info=[
        'ipaddress'=>$ip,
        'language'=>$language,
        'software'=>$software
    ];
 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>Request-header-parser</title>
     </head>
     <body>
         <pre style='word-wrap: break-word;
                    white-space: pre-wrap;'>
             <?php echo json_encode($user_info) ?>
         </pre>
     </body>
 </html>
