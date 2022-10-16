<?php

/**
 * @package       block_add
 * @author        Mohammad ahmad
 * @license       http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

global $DB,$OUTPUT;
$messages=$DB->get_records('blocks_table');
$templatecontext=(object)[
    'show'=>array_values($messages),
];
echo $OUTPUT->render_from_template('block_add/manage', $templatecontext);