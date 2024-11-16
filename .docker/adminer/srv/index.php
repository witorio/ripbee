<?php

function adminer_object()
{
    // required to run any plugin
    include_once "./plugin.php";

    // autoloader
    // foreach (glob("plugins/*.php") as $filename) {
    //     include_once "./$filename";
    // }

    // enable extra drivers just by including them
    include_once "./fill-login-form.php";

    $plugins = array(
        /* Params
        1. DB type - "server" == MySQL, others are sqlite, sqlite2, pgsql, oracle, mssql, firebird, simpledb, mongo, elastic
        2. server - localhost by default
        3. login
        4. password
        5. DB name
        */
        new FillLoginForm("pgsql", getenv('ADMINER_HOST'), getenv('ADMINER_USER'), getenv('ADMINER_PASSWORD'), getenv('ADMINER_DATABASE'))
    );

    return new AdminerPlugin($plugins);
}

// include original Adminer
include "./adminer-pgsql-pl.php";
