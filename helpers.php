<?php
    function setHeaders() {
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");
    
    }