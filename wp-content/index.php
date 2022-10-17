<?php
// Silence is golden.
function hk_CreatDatabaseT_product(){
    global $wpdb;
    $charsetCollate = $wpdb->get_charset_collate();
    $$T_productTable = $wpdb->prefix . 'T_product';
    $createT_productTable = "CREATE TABLE IF NOT EXISTS {$T_productTable} (
        id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        image varchar(255) NOT NULL,
        PRIMARY KEY (id)
    ) {$charsetCollate};";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $createT_productTable );
}

add_action('init', 'hk_CreatDatabaseT_product');