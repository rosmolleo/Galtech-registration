<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body style="background-color:#212221;
text-align:center;">
    <div style="width:45%;
    height:100%;
    background-color:#dcb899;
    text-align:justify;
    padding:1%;
    margin-top:4%;
    margin-left:26.5%;
    margin-bottom:4%;">
        <p class="p" style="margin-top:10%;
        margin-bottom:13%;
        text-align:center;
        font-size:40px;">Login</p>
        <form style="text-align:justify;
        margin-left:10%;" method="post">
            <label class="p" style="font-size:30px;
            margin-right:18%;
            margin-bottom:5%;" htmlfor="email">Email:</label>
            <input required class="p" style="width:49.8%;
            height:10%;
            font-size:25px;
            margin-bottom:5%;
            border:none;
            outline:none;" type="email" name="mail" id="email"><br>
            <label  class="p" style="font-size:30px;
            margin-right:8.2%;
            " htmlfor="pass">Password:</label>
            <input required class="p" style="width:49.8%;
            height:10%;
            font-size:25px;
            border:none;
            outline:none;" type="password" name="password" id="pass"><br>
            <button class="p" type="submit" style="background-color:white;padding:3% 5%;
            font-size:30px;margin-left:23%;
            margin-top:13%;
            border-radius:40px;
            border:none;
            width:7cm;">Login</button>

<?php
include "Mysql_connect.php";
if(isset($_POST['mail'])||isset($_POST['password'])){
    $user=$_POST['mail'];
    $password=$_POST['password'];
    $pass=md5($password);
    $check="SELECT `ID` FROM `registrationdetails` WHERE `Email`='$user' AND `ConfirmPassword`='$pass'";
    $res=$conn->query($check);
    $row=$res->fetch_assoc();
    if(!is_null($row)){
    $id=$row['ID'];
    // if($res->num_rows>0){
        session_start();
        $_SESSION['id']=$id;

        header('Location:contact.php');
    // }
    // else{
    // echo "<p style='font-size:25px;'>Invalid username or password!Please try again</p>";
    // }
    }
    else{
        echo "<p style='font-size:25px;'>Invalid username or password!Please try again</p>";
    }
}

?>
 </form>
    </div>
<section class="terms">
        <div class="term1">
            <button class="btn2 btn">Terms & Support</button>
        </div>
        <div class="term2">
              <button class="btn3 p"> 
                <span class="poz btn">Designed with</span>
                  <svg width="40" height="15" viewBox="0 0 80 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M79.444 18.096c-.136 0-.26.088-.324.272-.82 2.34-1.928 3.732-2.84 3.732-.524 0-.736-.584-.736-1.5 0-2.292 1.372-7.152 2.064-9.368.08-.268.132-.508.132-.712 0-.644-.352-.96-1.224-.96-.94 0-1.952.368-2.936 2.092-.34-1.52-1.368-2.184-2.804-2.184-1.66 0-3.264 1.068-4.584 2.8-1.32 1.732-2.872 2.3-4.04 2.02.84-2.056 1.152-3.592 1.152-4.732 0-1.788-.884-2.868-2.312-2.868-2.172 0-3.424 2.072-3.424 4.252 0 1.684.764 3.416 2.444 4.256-1.408 3.184-3.464 6.064-4.244 6.064-1.008 0-1.304-4.932-1.248-8.46.036-2.024.204-2.128.204-2.74 0-.352-.228-.592-1.144-.592-2.136 0-2.796 1.808-2.896 3.884a10.233 10.233 0 0 1-.368 2.332c-.892 3.184-2.732 5.6-3.932 5.6-.556 0-.708-.556-.708-1.284 0-2.292 1.284-5.156 1.284-7.6 0-1.796-.788-2.932-2.272-2.932-1.748 0-4.06 2.08-6.248 5.976.72-2.984 1.016-5.872-1.116-5.872A2.886 2.886 0 0 0 36 9.916a.752.752 0 0 0-.432.728c.204 3.176-2.56 11.312-5.18 11.312-.476 0-.708-.516-.708-1.348 0-2.296 1.368-7.144 2.056-9.364.088-.288.136-.536.136-.752 0-.608-.376-.92-1.228-.92-.936 0-1.952.356-2.932 2.08-.344-1.52-1.372-2.184-2.808-2.184-2.356 0-4.988 2.492-6.144 5.74-1.548 4.336-4.668 8.524-8.868 8.524-3.812 0-5.824-3.172-5.824-8.184C4.068 8.312 9.38 2.4 13.32 2.4c1.884 0 2.784 1.2 2.784 3.04 0 2.228-1.244 3.264-1.244 4.112 0 .26.216.516.644.516 1.712 0 3.728-2.012 3.728-4.756S17.004.56 13.064.56C6.552.56 0 7.112 0 15.508c0 6.68 3.296 10.708 8.996 10.708 3.888 0 7.284-3.024 9.116-6.552.208 2.924 1.536 4.452 3.56 4.452 1.8 0 3.256-1.072 4.368-2.956.428 1.972 1.564 2.936 3.04 2.936 1.692 0 3.108-1.072 4.456-3.064-.02 1.564.336 3.036 1.692 3.036.64 0 1.404-.148 1.54-.708 1.428-5.904 4.956-10.724 6.036-10.724.32 0 .408.308.408.672 0 1.604-1.132 4.892-1.132 6.992 0 2.268.964 3.768 2.956 3.768 2.208 0 4.452-2.704 5.948-6.656.468 3.692 1.48 6.672 3.064 6.672 1.944 0 5.396-4.092 7.488-8.424.82.104 2.052.076 3.236-.76-.504 1.276-.8 2.672-.8 4.068 0 4.02 1.92 5.148 3.572 5.148 1.796 0 3.252-1.072 4.368-2.956.368 1.7 1.308 2.932 3.036 2.932 2.704 0 5.052-2.764 5.052-5.032 0-.6-.256-.964-.556-.964zM23.32 21.888c-1.092 0-1.52-1.1-1.52-2.74 0-2.848 1.948-7.604 4.008-7.604.9 0 1.24 1.06 1.24 2.356 0 2.892-1.852 7.988-3.728 7.988zm37.404-8.5c-.652-.776-.888-1.832-.888-2.772 0-1.16.424-2.14.932-2.14s.664.5.664 1.196c0 1.164-.416 2.864-.708 3.716zm8.468 8.5c-1.092 0-1.52-1.264-1.52-2.74 0-2.748 1.948-7.604 4.024-7.604.9 0 1.22 1.052 1.22 2.356 0 2.892-1.82 7.988-3.724 7.988z" fill="currentColor"></path></svg>
              </button>
        </div>
    </section>
</body>
</html>