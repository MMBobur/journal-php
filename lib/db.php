<?php
    session_start();

    function connect(){
        global $config;
        $db = new mysqli($config['db']['host'],$config['db']['user'],$config['db']['pass'],$config['db']['dbName']);
        $db->query("SET NAME utf8");
        return $db;
    }

    function getOne($table, $id){
        $db = connect();
        $sql = $db->query("SELECT * FROM `".$table."` where id={$id}")or die("Ma`lumot olishda xatolik.\n".$db->error);
        
        return getJSON($sql);
    }
    

    function getArray($r){
        $a=[]; $i=0;
        while($row = $r->fetch_array()){
            $a[$i] = $row;
            $i++;
        }
        return $a;
    }

    function getJSON($sth){
        $rows = array();
        if($sth){
            while($r = mysqli_fetch_assoc($sth)) {
                $rows[] = $r;
            }
        }
        return $rows;
    }

    function getAll($tname, $start=0){
        $db = connect();
        $sql = $db->query("Select * from ".$tname." ORDER by id DESC Limit {$start}, 6") or die($db->error);
        return getArray($sql);
    }

    function getAllData($tname){
        $db = connect();
        $sql = $db->query("Select * from ".$tname) or die($db->error);
        return getArray($sql);
    }

    function getCategory($tname){
        $db = connect();
        $sql = $db->query("Select * from ".$tname) or die($db->error);
        return getArray($sql);
    }

    function delete($id, $tname){
        $db = connect();
        $sql = $db->query("DELETE FROM `{$tname}` WHERE id='{$id}'")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }

    function getAdmin($username, $password){
        $db = connect();
        $md5 = md5($password);
        $sql = $db->query("SELECT * FROM users ")or die($db->error);
        $r = getArray($sql);

        foreach($r as $k) { 
            if($k["username"]==$username && $k["password"]==$md5){
                $_SESSION["role"] = $k["role"];
                return true;
            }
        }
        return false;   
    }

    function login($user, $pass){
        if(getAdmin($user, $pass)){
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            return true;
        }else{
            return false;
        }
    }

    function isAuth(){
        $username = $_SESSION['username'] ?? null;
        $password = $_SESSION['password'] ?? null;
        
        if(getAdmin($username, $password)){
            return true;
        }else{
            return false;
        }
    }

    function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['password']);

        return true;
    }
    function updateUser($username, $password){
        $md5 = md5($password);

        $db = connect();
        $sql = $db->query("UPDATE `users` SET `username`='{$username}',`password`='{$md5}' WHERE `username`='{$_SESSION['username']}'")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql){
            return true;
        }else{
            return false;
        }
    }
    function newJournal($title, $author, $tel, $email, $pdf, $categoryID){
        $db = connect();
        $date = date("Y/m/d"); 
        $year = date('Y');
        $month = date('m');

        $sql = $db->query("INSERT INTO `journal`(`title`, `author`, `tel`, `email`, `pdf`, `categoryID`, `date`, `year`, `month`) VALUES 
                        ('{$title}','{$author}','{$tel}','{$email}','{$pdf}','{$categoryID}','{$date}','{$year}','{$month}')")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }

    function newJournalAdmin($title, $author, $tel, $email, $categoryID, $journalID, $page, $pdf){
        $db = connect();
        $date = date("Y/m/d"); 
        $year = date('Y');
        $month = date('m');

        $sql = $db->query("INSERT INTO `journal`(`journal_id`, `title`, `author`, `tel`, `email`, `pdf`, `page`, `categoryID`, `date`, `year`, `month`) VALUES 
                        ('{$journalID}','{$title}','{$author}','{$tel}','{$email}','{$pdf}','{$page}','{$categoryID}','{$date}','{$year}','{$month}')")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }

    function getJournals($status=0){
        $db = connect();
        if($status<=0){
            $sql = $db->query("Select * from journal WHERE `journal_id`=0") or die($db->error);
        }else{
            $sql = $db->query("Select * from journal WHERE `journal_id`>0") or die($db->error);
        }
        return getArray($sql);
    }

    function getJournalsLimt($start=0){
        $db = connect();
        $sql = $db->query("Select * from journals ORDER by id DESC Limit {$start}, 6") or die($db->error);
        return getArray($sql);
    }

    function getOneJournal($id){
        $db = connect();
        $sql = $db->query("Select * from journal JOIN category on categoryID=category.id WHERE journal.id=".$id) or die($db->error);
        return getArray($sql);
    }

    function acceptJournal($id, $status){
        $db = connect();
        $sql = $db->query("UPDATE journal SET status={$status} WHERE id=".$id) or die($db->error);
        if($sql) return true;
        return false;
    }
    function deleteJournal($id){
        $db = connect();
        $jOne = $db->query("Select * from journal WHERE `id`=".$id) or die($db->error);
        $journal = getArray($jOne);
        $path = $_SERVER['DOCUMENT_ROOT']."/assets/pdf/".$journal[0]["pdf"];

        if(file_exists($path)){
            if(unlink($path)){
                $sql = $db->query("DELETE FROM journal WHERE id='{$id}'")or die("Ma`lumot olishda xatolik.\n".$db->error);
                if($sql) return true;
                return false;
            }
        }
        
    }
    function getCategoryCount(){
        $db = connect();
        $sql = $db->query("SELECT category.title_uz as title_uz, category.title_en as title_en ,COUNT(journal.categoryID) as count FROM journal RIGHT JOIN category on category.id=journal.categoryID GROUP BY category.id;")or die("Ma`lumot olishda xatolik.\n".$db->error);
        return getArray($sql);
    }

    function getSite(){
        $db = connect();
        $sql = $db->query("SELECT * FROM `site` WHERE id=1")or die("Ma`lumot olishda xatolik.\n".$db->error);
        return getArray($sql);
    }

    function agregat_func(){
        $db = connect();
        $sql = $db->query("Select * From journal WHERE status=1");
        $r = $sql->num_rows;
        return $r;
    }

    function getArxiv(){
        $db = connect();
        $sql = $db->query("SELECT date, year, month FROM `journal` GROUP BY month")or die("Ma`lumot olishda xatolik.\n".$db->error);
        return getArray($sql);
    }

    function updateSite($email, $phone, $address, $tg, $whatsapp){
        $db = connect();
        $sql = $db->query("UPDATE `site` SET `email`='{$email}',`phone`='{$phone}',`address`='{$address}',`tg`='{$tg}',`whatsapp`='{$whatsapp}' WHERE id=1")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }
    function insertUser($fullname, $rasm, $info, $username, $password, $role){
        $pass = md5($password);
        $db = connect();
        $sql = $db->query("INSERT INTO `users`(`fullname`, `rasm`, `info`, `username`, `password`, `role`) VALUES ('{$fullname}','{$rasm}','{$info}','{$username}','{$pass}','{$role}')")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }

    function updateUserF($id, $fullname, $info, $username, $password, $role){
        $pass = md5($password);
        $db = connect();
        $sql = $db->query("UPDATE `users` SET `fullname`='{$fullname}',`info`='{$info}',`username`='{$username}',`password`='{$pass}',`role`='{$role}' WHERE `id`=".$id)or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql){
            return true;
        }else{
            return false;
        }
    }

    function getUsers(){
        $db = connect();
        $sql = $db->query("Select * from users") or die($db->error);
        return getArray($sql);
    }

    function getJournalsYear($year, $month){
        $db = connect();
        $sql = $db->query("Select * from journal WHERE `year`={$year} and `month`={$month}") or die($db->error);
        return getArray($sql);
    }

    function insertJournal($title, $text, $rasm, $pdf){
        $db = connect();
        $date = date("Y/m/d"); 

        $sql = $db->query("INSERT INTO `journals`(`title`, `text`, `rasm`, `date`, `pdf`) VALUES 
                        ('{$title}','{$text}','{$rasm}','{$date}','{$pdf}')")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }
    function updateJournal($id, $title, $text){
        $db = connect();
        $sql = $db->query("UPDATE `journals` SET `title`='{$title}',`text`='{$text}' WHERE id=".$id)or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }
    function connectJournal($id, $journal, $page){
        $db = connect();
        $sql = $db->query("UPDATE `journal` SET `journal_id`='{$journal}', `page`='{$page}' WHERE id=".$id)or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }

    function getSubmissions($id){
        $db = connect();
        $sql = $db->query("SELECT * FROM `journal` where journal_id={$id}")or die("Ma`lumot olishda xatolik.\n".$db->error);
        
        return getArray($sql);
    }
?>
