<?php

if($_POST["message"]) {

mail("fotografie.feline21@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: fotografie.feline21@gmail.com");

}

?>
<!DOCTYPE html>
<html lang="en">

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
</html>