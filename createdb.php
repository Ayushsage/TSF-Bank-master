<?php
    //Creating a connection 
    $conn=mysqli_connect("localhost","root","");
    
    if(!$conn){
        die("Could Not Connect to the Database".mysqli_connect($conn));
    }
    
    //Creating Database
    $sql="CREATE DATABASE bankdb";
    
    if(!mysqli_query($conn,$sql)){
        die("Could not be able to Create Database<BR>");
    }
    
    else{
        echo ("Database has been created<BR>");
    }

    if(!mysqli_select_db($conn,"bankdb")){
        die("Could not be able to Connect to the Database".mysqli_error($conn));
    }
    
    //Creating Users Table
    $cmd="CREATE TABLE users(User_id int primary key not null auto_increment,Name varchar(255),Email varchar(255) unique not null,Acc_no varchar(255) unique not null,Curr_balance int(255))";

    $sql2=mysqli_query($conn,$cmd);
    
    if(!$sql2)
    {
        die("Could not been able to create users table".mysqli_error($conn));
    }
    else{
        echo ("Users Table has been created<BR>");
    }

    //Entering Records of Users
    $cmd2 = "INSERT INTO `users`( `Name`, `Email`,`Acc_no`,`Curr_balance`) VALUES ('Abhishek Choudhary','abhi123@gmail.com','785634568765','38968'),('Arun Rajput','apsrajput@gmail.com','987643588526','79787'),('Aastha Agrawal','ashagrawal@gmail.com','875934569624','55678'),('Gautam Suthar','gpsuthar@yahoo.in','568964357955','67368'),('Mohit Hingonia','mohit.hingonia@rediffmail.com','986878655496','67263'),('Harshvardhan Shringhla','harshvs@gmail.com','876877434636','23233'),('Varsha Narwariya','narwariya.varsha7@yahoo.com','654686758685','34232'),('Shikha Patidar','shikhaa.34@gmail.com','869867585874','76765'),('Rajeev Kumar','raj.ev@rediffmail.com','795758585599','32322'),('Abhimanyu Singh','abhi.man@gmail.com','765875685856','90232')";

    $sql3 = mysqli_query($conn,$cmd2);

    if(!$sql3){
	    echo("Records have not been Inserted").mysqli_error($conn); 
    }   
    else
    {
	    echo("All users are Inserted into Database<BR>");
    }

    //Creating the Transaction Table 
    $cmd3="CREATE TABLE transactions(Trans_id int primary key not null auto_increment,Sender varchar(255),Receiver varchar(255) not null,Amount int(255),Trans_date datetime not null)";

    $sql4=mysqli_query($conn,$cmd3);
    if(!$sql4){
	    echo ("Transaction Table has not been created<BR>").mysqli_error($conn);
    }
    else{
	    echo ("Transaction Table has been created<BR>");
    }
    echo '
        <script>
        window.location="home.php";
        </script>
    ';
?>