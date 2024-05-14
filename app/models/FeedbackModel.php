<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $fillable = ['fio', 'email', 'message'];

    $data = validate($fillable);

    foreach($data as $k => $v)
    {
        $data[$k] = trim($v);
        $data[$k] = strip_tags($v);
    }
    
    $result = $db->query("INSERT INTO `feedback` (fio, email, message) VALUES
    (?, ?, ?)", [
        $data['fio'],
        $data['email'],
        $data['message']
    ]);

    if($result)
    {   
        $info = $_SESSION['msg'] = "Ваше обращение успешно отправлено";
    }
}