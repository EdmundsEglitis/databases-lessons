<?php
function logout(){
if (isset($_POST['logout'])) {
    session_unset();
    header('/'); // Redirect to the login page.
}}