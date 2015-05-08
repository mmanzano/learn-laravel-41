<?php

function is_admin()
{
return Auth::check() && Auth::user()->type == 'admin';
}