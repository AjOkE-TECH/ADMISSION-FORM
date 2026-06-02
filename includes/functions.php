<?php

function cleanInput($data)
{
    return htmlspecialchars(trim($data));
}

function errorMessage($message)
{
    return "<div class='error'>$message</div>";
}

function successMessage($message)
{
    return "<div class='success'>$message</div>";
}

?>