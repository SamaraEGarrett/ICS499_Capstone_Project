<?php
$folder = 0;
$page = 'index';

DEFINE('PAGE_TITLE','Home');
require_once('header.php');
?>

<!-- links for demo -->
<div class="standard_color">
    Presentation 1 Demo:
    <div><a href="index.php">Viewer View</a></div>
    <div><a href="client/index.php">Client View</a></div>
    <div><a href="admin/index.php">Admin View</a></div>
</div>

<?php
require_once('footer.php');
?>