<?php

if($_POST["message"]) {

mail("fotografie.feline21@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: fotografie.feline21@gmail.com");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style-shop.css" rel="stylesheet"/>
    <title>Flowerinthelight</title>
</head>
<body>
    <div class="headertext" style="display:flex">
        <img src="./Naamloos.ico" width="40" height="40" style="margin-right: 5px;">
        <h1>fotografieFeline</h1>
    </div>
    <div style="display:flex;">
      <div class="picturehor">
          <img src="./img/shop/Flowerinthelight.jpeg" height="350">
    </div>
    <div class="info">
        <p>
            Je kunt deze foto uit laten printen op;<br>
            -Canvas, met eventueel een lijst eromheen<br>
            -Acrylglas<br>
            -Aluminium, mat of glanzend<br>
            Perfect voor aan de muur.
          </p>
    </div>
    </div>

    <div class="order">
        <button type="button" class="order__button">Order this piece</button>

        <div class="order__content">
        <h3>Fill out the form and submit. Attention: press 'send' otherwise we won't receive your order.</h3>
            <form method="post" action="mailto:fotografie.feline21@gmail.com">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Fullname">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Emailadress">

                <label for="street">Street</label>
                <input type="text" id="street" name="street" placeholder="Street + number">

                <label for="postcode">Postcode</label>
                <input type="text" id="postcode" name="postcode" placeholder="Postcode">

                <label for="sity">Sity</label>
                <input type="text" id="sity" name="sity" placeholder="Sity">

                <label for="country">Country</label>
                <select id="country" name="country">
                <option value="none">...choose country...</option>
                <option value="The Netherlands">The Netherlands</option>
                </select>

                <textarea name="message"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>


    <script>
        document.querySelectorAll('.order__button').forEach(button =>{
            button.addEventListener('click', () => {
    
                button.classList.toggle('order__button--active');
    
            })
        })
    </script>
        <style>
            .order__button{
                display: block;
                width: 20%;
                padding: 15px;
                border: none;
                outline: none;
                cursor: pointer;
                background: #333;
                color: white;
                text-align: left;
                float: center;
                margin: 1%;
            }

            .order__button::after{
                content: '\25be';
                float: center;
                transform: scale(1.5);
            }

            .order__button--active + .order__content {
                display: block;
            }
            .order__button--active{
                background: #555;
            }
            .order__button--active::after{
                content: '\25b4';
            }

            .order__content{
                padding: 0 15px;
                font-family: sans-serif;
                background: inherit;
                display: none;
                overflow: auto;
            }
        </style>

</body>
</html>