<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Массив для временного хранения сообщений пользователю.
    $messages = array();
    
    // В суперглобальном массиве $_COOKIE PHP хранит все имена и значения куки текущего запроса.
    // Выдаем сообщение об успешном сохранении.
    if (!empty($_COOKIE['save'])) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('save', '', 100000);
        // Если есть параметр save, то выводим сообщение пользователю.
        $messages[] = 'Спасибо, результаты сохранены.';
    }
    
    $errors = array();
    $errors['Name'] = !empty($_COOKIE['Name_error']);
    $errors['Email'] = !empty($_COOKIE['Email_error']);
    $errors['DD'] = !empty($_COOKIE['DD_error']);
    $errors['DM'] = !empty($_COOKIE['DM_error']);
    $errors['DY'] = !empty($_COOKIE['DY_error']);
    $errors['Rad'] = !empty($_COOKIE['Rad_error']);
    $errors['Limbs'] = !empty($_COOKIE['Limbs_error']);
    $errors['SP'] = !empty($_COOKIE['SP_error']);
    $errors['BG'] = !empty($_COOKIE['BG_error']);
    $errors['CH'] = !empty($_COOKIE['CH_error']);
    
    if ($errors['Name']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('Name_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Заполните имя.</div>';
    }
    if ($errors['Email']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('Email_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Заполните Email.</div>';
    }
    if ($errors['DD']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('DD_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Заполните День</div>';
    }
    if ($errors['DM']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('DM_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Заполните Месяц</div>';
    }
    if ($errors['DY']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('DY_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Заполните Год</div>';
    }
    if ($errors['Rad']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('Rad_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Выберите пол</div>';
    }
    if ($errors['Limbs']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('Limbs_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Выберите количество конечностей</div>';
    }
    if ($errors['SP']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('SP_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Выберите суперспособность.</div>';
    }
    if ($errors['BG']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('BG_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Напишите биографию.</div>';
    }
    if ($errors['CH']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('CH_error', '', 100000);
        // Выводим сообщение.
        $messages[] = '<div class="error">Необходимо подтвердить, что вы ознакомились с контрактом</div>';
    }
    
    $values = array();
    $values['Name'] = empty($_COOKIE['Name_value']) ? '' : $_COOKIE['Name_value'];
    $values['Email'] = empty($_COOKIE['Email_value']) ? '' : $_COOKIE['Email_value'];
    $values['DD'] = empty($_COOKIE['DD_value']) ? '' : $_COOKIE['DD_value'];
    $values['DM'] = empty($_COOKIE['DM_value']) ? '' : $_COOKIE['DM_value'];
    $values['DY'] = empty($_COOKIE['DY_value']) ? '' : $_COOKIE['DY_value'];
    $values['Rad'] = empty($_COOKIE['Rad_value']) ? '' : $_COOKIE['Rad_value'];
    $values['Limbs'] = empty($_COOKIE['Rad_value']) ? '' : $_COOKIE['Limbs_value'];
    $values['SP'] = empty($_COOKIE['SP_value']) ? '' : $_COOKIE['SP_value'];
    $values['BG'] = empty($_COOKIE['BG_value']) ? '' : $_COOKIE['BG_value'];
    $values['CH'] = empty($_COOKIE['CH_value']) ? '' : $_COOKIE['CH_value'];
    

include('form.php');
}
else {
    $errors = FALSE;
    if (empty($_POST['Name'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('Name_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('Name_value', $_POST['Name'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['Email'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('Email_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('Email_value', $_POST['Email'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['DD'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('DD_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('DD_value', $_POST['DD'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['DM'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('DM_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('DM_value', $_POST['DM'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['DY'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('DY_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('DY_value', $_POST['DY'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['Rad'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('Rad_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('Rad_value', $_POST['Rad'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['Limbs'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('Limbs_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('Limbs_value', $_POST['Limbs'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['SP'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('SP_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('SP_value', $_POST['SP'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['BG'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('BG_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('BG_value', $_POST['BG'], time() + 30 * 24 * 60 * 60);
    }
    if (empty($_POST['CH'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('CH_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на месяц.
        setcookie('CH_value', $_POST['CH'], time() + 30 * 24 * 60 * 60);
    }
    
    // *************
    // TODO: тут необходимо проверить правильность заполнения всех остальных полей.
    // Сохранить в Cookie признаки ошибок и значения полей.
    // *************
    
    if ($errors) {
        // При наличии ошибок перезагружаем страницу и завершаем работу скрипта.
        header('Location: index.php');
        exit();
    }
    else {
        // Удаляем Cookies с признаками ошибок.
        setcookie('Name_error', '', 100000);
        setcookie('Email_error', '', 100000);
        setcookie('DD_error', '', 100000);
        setcookie('DM_error', '', 100000);
        setcookie('DY_error', '', 100000);
        setcookie('Rad_error', '', 100000);
        setcookie('Limbs_error', '', 100000);
        setcookie('SP_error', '', 100000);
        setcookie('BG_error', '', 100000);
        setcookie('CH_error', '', 100000);
        // TODO: тут необходимо удалить остальные Cookies.
    }
    // Сохранение в XML-документ.
    // ...
    
    // Сохраняем куку с признаком успешного сохранения.
    setcookie('save', '1');
    
    // Делаем перенаправление.
    header('Location: index.php');
}
/*if (empty($_POST['Email'])) {
    print("<script language=javascript>window.alert('Enter Email');</script>");
    $errors = TRUE;
}
if (empty($_POST['BG'])) {
    print("<script language=javascript>window.alert('Enter Biografy');</script>");
    $errors = TRUE;
}
if (count($_POST['SP'])==0) {
    print("<script language=javascript>window.alert('Enter SuperPowers');</script>");
    $errors = TRUE;
}
if (empty($_POST['DD']) or empty($_POST['DM']) or empty($_POST['DY']) or !ctype_digit($_POST['DD']) or !ctype_digit($_POST['DM']) or !ctype_digit($_POST['DY'])) {
    print("<script language=javascript>window.alert('Enter correct Date of Birth');</script>");
    $errors = TRUE;
}
if(isset($_POST['CH']) &&
    $_POST['CH'] == 'Yes')
{
    $ch='OZNACOMLEN';
}
else
{
    print("<script language=javascript>window.alert('Сheck the checkbox');</script>");
    $errors = TRUE;
}
if($errors) { exit();};


$sp='';

for($i=0;$i<count($_POST['SP']);$i++){
    $sp .= $_POST['SP'][$i] . '  ';
}
$user = 'u20237';
$pass = '8241663';
$db = new PDO('mysql:host=localhost;dbname=u20237', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

try {
    $stmt = $db->prepare("INSERT INTO formOne (NAME,EMAIL,YEAR,SEX,Nol,SUPERPOWERS,BIO,CHECKBOX) VALUES (:NAME,:EMAIL,:YEAR,:SEX,:NoL,:SUPERPOWERS,:BIO,:CHECKBOX)");   //добавление в базу данные
    $stmt -> execute(array('NAME'=>$_POST['Name'], 'EMAIL'=>$_POST['Email'],'YEAR'=>$_POST['DY'],'SEX'=>$_POST['Rad'],'NoL'=>$_POST['Limbs'], 'SUPERPOWERS'=>$sp, 'BIO'=>$_POST['BG'], 'CHECKBOX'=>$ch));
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}*/
?>
