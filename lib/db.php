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

    function getAll($tname){
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

    function newJournal($title, $author, $tel, $email, $pdf, $categoryID){
        $db = connect();
        $date = date("Y/m/d"); 
        $sql = $db->query("INSERT INTO `journal`(`title`, `author`, `tel`, `email`, `pdf`, `categoryID`, `date`) VALUES 
                        ('{$title}','{$author}','{$tel}','{$email}','{$pdf}','{$categoryID}','{$date}')")or die("Ma`lumot olishda xatolik.\n".$db->error);
        if($sql) return true;
        return false;
    }

    function getJournals($status){
        $db = connect();
        $sql = $db->query("Select * from journal WHERE `status`=".$status) or die($db->error);
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
?>
