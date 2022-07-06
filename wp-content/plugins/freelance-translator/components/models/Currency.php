<?php
function createCurrency(){
    try {
        global $wpdb;
        $table_name = $wpdb->prefix . 'currency';

        if ($wpdb->get_var("SHOW FULL TABLES LIKE $table_name") != $table_name) {
            $sql = 'CREATE TABLE ' . $table_name . ' (
                          `id` int(11) NOT NULL,
                          `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `course` decimal(10,10) NOT NULL,
                          `min` decimal(10,10) NOT NULL,
                          `max` decimal(10,10) NOT NULL,
                          `reserve` decimal(10,10) NOT NULL,
                          `commision` decimal(2,2) NOT NULL,
                          `time_last_update` timestamp NOT NULL DEFAULT current_timestamp()
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;';
            $wpdb->query($sql);
            $wpdb->query('ALTER TABLE `dp_currency` ADD PRIMARY KEY (`id`);');
            $wpdb->query('ALTER TABLE `dp_currency` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
            $wpdb->query('COMMIT;');
        }
    } catch (Exception $e) {
        print_r($e);
    }
}