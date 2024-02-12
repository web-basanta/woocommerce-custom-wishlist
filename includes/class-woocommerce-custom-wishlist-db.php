<?php

/**
 * @var array
 * 
*/

class Woocommerce_Custom_Wishlist_Activator_DB{


    public static function cheate_Tables(){
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        $table_name = $wpdb->prefix. 'woocommerce_custom_wishlist';

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id INT AUTO_INCREMENT,
            user_id INT,
            product_id INT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }

    public static function insert_data($user_id, $product_id){
        global $wpdb;
    }

    public static function delete_data($user_id, $product_id){
        global $wpdb;
    }

    public static function update_data($user_id, $product_id){
        global $wpdb;
    }
    public static function get_wishlist($user_id, $product_id){
        global $wpdb;
        $table_name = $wpdb->prefix. 'woocommerce_custom_wishlist';
        $sql = "SELECT * FROM $table_name WHERE user_id = $user_id AND product_id = $product_id";
        return $table_name->query($sql);
    }
}