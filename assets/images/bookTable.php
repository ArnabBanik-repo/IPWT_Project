<?php
    $connect = mysqli_connect("localhost", "root", "", "ProjectDB");
    if(!$connect)
        die("Connection to database failed");

    $seats_available = mysqli_fetch_array(mysqli_query($connect, "select Total_Seats from seats"))[0];
    if($seats_available == 0){
        die("Sorry, we are full at the moment");
    }
    
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $phone = $_GET['phone'];
    $time = $_GET['time'];
    $mail = $_GET['mail'];
    $seats = $_GET['seats'];
    $dbtime = date ('Y-m-d H:i:s', strtotime($time));

    $flag = 0;
    $query = mysqli_query($connect, "select Mail from table_book_users");
    while(($row = mysqli_fetch_array($query))){
        if($row[0] == $mail){
            $flag = 1;
            echo "You already have a seat booked";
            break;
        }
    }

    if($flag == 0){
        $query = mysqli_query($connect, "insert into table_book_users values('$fname', '$lname', '$phone', '$dbtime', '$mail', $seats)");
        echo "Seat booked successfully";
        $seats_available = $seats_available - 1;
        mysqli_query($connect, "update seats set Total_Seats = $seats_available");
        if(!$query)
            die("Query failed");
    }

    // Ask ma'am how to leave the seats
    // Ask ma'am if there should be an online food ordering system
    
?>