<?php
if ((isset($_POST['tel']) && $_POST['tel'] != "")) { //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'busforward@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Регистрация на турнир';

    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Ф И О: ' . $_POST['tel'] . '</p>                        
                        <p>Название команды: ' . $_POST['commandName'] . '</p>                        
                        <p>Телефон: ' . $_POST['tel'] . '</p>                        
                        <p>E-mail: ' . $_POST['email'] . '</p>                        
                    </body>
                </html>'; 
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <busforward@gmail.com>\r\n"; //Наименование и почта отправителя
    if (mail($to, $subject, $message, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}?>