<?php

function h($str)
{
    // ENT_QUOTESはエスケープする文字の種類を決めてる
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}