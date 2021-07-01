<?php
    session_start();
    include 'koneksi.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <style>
* {
    margin: 0;
    box-sizing: border-box;
    font-family: "Raleway", sans-serif;
  }

body {
    background-color: #f2f2f2;
    background-image: url(bg01.svg);
}

.navbar{
    float:right;
    width:100%;
    padding: 8px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.116);
}
.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
    /* height:50px */
}
.topnav li {
    float: left;
    /* height: 50px; */
}
.topnav li a {
    display: inline-block;
    color: #333;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
}
/* .topnav li:hover {
    background: #eaeaea;
    position: relative;
} */
.UPT-BLK {
    font-weight: bold;
    color: #333;
    margin-right: 10%;
    margin-left: 3%;
}
.Topnav-Login {
    font-weight: bold;
    margin-right: 4%;
}


.topnav li:hover a {
    color:#3094db;
}
.topnav ul {
    left: -9999px;
    list-style-type: none;
    position: absolute;
    top: -9999px;
}
.topnav li:hover ul {
    background-color: #eaeaea;
    left: 0px;
    padding: 0px;
    top: 50px;
    width: 160px;
}
.topnav li:hover ul li {
    border: none;
    height: 40px;
}
.topnav li:hover ul li a {
    color: #3094db;
    display: block;
    text-align: left !important;
    font-size: 20px;
    height: 40px;
    line-height: 40px;
    padding: 0px;
    text-decoration: none;
    text-indent: 5px;
    width: 160px;
    padding: 3px;}
.topnav li:hover ul li a:hover {
    background: #3094db;
    color: #fff;
    height: 40px;
    padding: 3px;
}

.bottomnav1 {
    display:none;
    list-style-type: none;
    width:50px;
    margin-top:0px;
    padding: 0;
    overflow: hidden;
    z-index:9999;
    margin-left:0px;
    /* background:#f1f1f1; */
    border-radius: 4px 4px 0 0;
}
a.dropbtn1 {
    text-decoration: none;
    /* background: #3094db; */
    width:50px;
    display: inline-block;
    /* color: rgb(255, 255, 255); */
    text-align: center;
    padding: 10px;
}
/* .dropdown1:hover .dropbtn1 {
    background-color: #3094db;
    color: rgb(255, 255, 255);
} */
.dropdown1 {
    display: inline-block;
}
.dropdown-content1 {
    z-index:9999;
    display: none;
    position: absolute;
    background-color: #ffffff;
    border-radius: 0 4px;
    margin-top:0px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.185);
}
.dropdown-content1 a {
    font-size:20px;
    color: #555;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content1 a:hover {
    background-color:  #3094db;
    color:rgb(255, 255, 255);
}
.dropdown1:hover .dropdown-content1 {
    display: block;
    width:100%
}

@media screen and (max-width:880px) {
    .topnav{
        display:none;
    }
    .bottomnav1{
        display:block;
    }
}

        
        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        
        input[type=submit] {
          background-color: #3232ca;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #3232ca;
        }
        
        .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding-left: 100px;
        padding-right: 100px;
        padding-top: 8%;
        padding-bottom: 10%;
        }

        @media screen and (max-width:880px) {
    
        h2 {
            padding-top: 20%;
        }
        input[type=submit]:hover {
            background-color: #3232ca;
        }
        input[type=submit] {
            background-color: #3232ca;
        }
        .container {
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 8%;
            padding-bottom: 10%;
        }
}
            

        </style>
</head>
<body>

    <nav class='navbar'>
    <ul class='topnav'>
        <li class='UPT-BLK'><a href='index.php'>UPT BLK Surabaya</a></li>
            <li><a href='index.php'> Home</a>
            <li><a href='#Profil'>Profil</a></li>
            <li><a href='ProgramPelatihan.php'>Program Pelatihan</a></li>
            <li><a href="Kontak.php">Hubungi Kami</a></li>
            <li><a href='Pendaftaran.php'>Pendaftaran</a></li>
            <?php if( isset($_SESSION['status']) ) : ?>
            <?php if( $_SESSION['status'] == 1 ) : ?>
                <li><a href='dashboard.php'>Admin</a></li>
            <?php endif; ?>
            <?php endif; ?>
            <?php if( !isset($_SESSION['status_login']) ) : ?>
            <li class="Topnav-Login" style="float: right;"><a href='Login.php'>Login</a></li>
            <?php else : ?>
            <li class="Topnav-Login" style="float: right;"><a href='Logout.php'>Logout</a></li>
            <?php endif; ?>
        </ul>
        <div class='bottomnav1'>
            <div class='dropdown1'>
                <a class='dropbtn1' href='#' style='font-size:20px; font-weight:700'><img src="BTN-Menu.svg"/></a>
                <div class='dropdown-content1' style='font-size:20px;'>
                  <a href='index.php' style='font-size:20px;'>Profil</a>
                  <!-- <a href='#' style='font-size:20px;'>Visi Misi</a> -->
                  <a href='ProgramPelatihan.php' style='font-size:20px;'>Program Pelatihan</a>                 
                  <a href='Kontak.php' style='font-size:20px;'>Hubungi Kami</a>
                  <a href='Pendaftaran.html' style='font-size:20px;'>Pendaftaran</a>
                  <a href='Login.php'>Login</a></li>
                </div>
              </div>
        </div>
    </nav>
    
    
    <div class="container">
        <h2>Contact Us</h2><br>
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Indonesia</option>
          <option value="canada">Australia</option>
          <option value="usa">USA</option>
        </select>

        <label for="country">Provinsi</label>
        <select id="country" name="provinsi">
          <option value="australia">Jawa Timur</option>
          <option value="canada">Jawa Tengah</option>
          <option value="usa">Jawa Barat</option>
        </select>
    
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
      </form>
    </div>
    
</body>
</html>