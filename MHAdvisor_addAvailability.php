<html>
<style type="text/css">
    body{
        text-align: left;
        padding-bottom: 100px;
        background: #F6F3E7;
        padding-top: 120px;
        font-size: 20px;
        color: #755E4A;
    }
    header{
        margin-top: -120;
        padding: -50px;
        font-size: 50px;
        font-weight: 50;
        background-image: linear-gradient(to left, #feaf7f, #b393d3);
        color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
    }   
    input{
        font-size: 23px;
        font-weight: 90;
        background-color: #f7e6d9;
        box-shadow: 0 0 0 2px #DEB8A0;
        transition: all .9s ease;
        align: top;
    }
</style>
<header>
    <h1>Add Availability Page</h1>
</header>

<body>
    <h2>Add New Availability Of Appointments For Students To Book In<h2>
    <h3>Enter The Date[DD/MM/YYYY] And Time[00:00AM/PM - 00:00AM/PM] You Wish To Open Availability<h3> 
    <h4>If you return to this page after attempting to click "Enter New Availability", then you have already opened availability for that date and time. Please attempt to add a different availability.<h4>
<body>        

<form action="MHAdvisor_addAvailabilitySQL.php" method="post">
    Date: <input type="text" name="Date" required><br>
    Time: <input type="text" name="Time" required><br>
    <input type="submit" value="Enter New Availablity">
</form>
<br>
<a href="MHAdvisor_loginpg.php">Back</a>
<a href="logoutpg.php">Logout</a>
<br>
<html>
