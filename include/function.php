<?php

function validateInput($data)
{
    return htmlspecialchars(trim($data));
}

function successMessage($message)
{
    return "
        <div class='success'>
            $message
        </div>
    ";
}

function errorMessage($message)
{
    return "
        <div class='error'>
            $message
        </div>
    ";
}
?>