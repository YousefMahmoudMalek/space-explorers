<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amazing Login Form Style - CSS</title>
    <link rel="stylesheet" href="ticket.css">
</head>
<body>

           
        <div class="form">
        <h4>Book your ticket</h4>
        <form action="admin/includes/tickethandler.php" method="post">
            <div class="login">
                <input type="text" name="name" placeholder="Name"> <!-- foregin key  user_name-->
                <input type="text" name="age" placeholder="Age"> <!-- ticket_age -->
                <input type="text" name="gmail" placeholder="Gmail"> <!-- ticket_email-->
                <input type="text" name="country" placeholder="Country"> <!-- ticket_country-->
                <input type="text" name="phonenum" placeholder="Phone num"> <!-- ticket_phonenum-->
                <input type="text" name="whatsapp" placeholder="WhatApp"> <!-- ticket_whatsapp-->
                <button type="submit">Book now</button>
            </div>
        </form>
        <div class="suggests">        
        </div>
    </div>
  
</body>

</html>