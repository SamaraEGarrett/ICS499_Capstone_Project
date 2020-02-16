
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <!-- project style sheet -->
    <?php 
    // different folder directions for files depending on their enclosing folder
    if ($folder == 0) {
        echo '<link rel="stylesheet" href="styles/style.css">';
    } else {
        echo '<link rel="stylesheet" href="../styles/style.css">';
    }

    // tool page has extra stylesheets for table display
    if ($page == 'tools') {
        echo '<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">';
    }
    ?>
</head>


<body>
    
<!-- business Title -->
<div id="header_0">
    Tool Rental System
</div>

<!-- login and Sign Up-->
<ul id="login_table">
    <li>
        <div class="login_table_item">
            Login
        </div>
    </li>
    <li>
        <div class="login_table_item">
            Sign Up
        </div>
    </li>
</ul>

<!-- navigation Menu -->
<div class="navbar">
    <ul class="nav_menu">
        <?php 
        if ($folder == 0) {
            // add main folder sections to navigation bar
            echo '<li class="nav_item">
                <a ';
            if ($page == 'index'){
                // current page's navbar button is highlighted
                echo 'class="active" ';
            }
            echo 'href="index.php">Home</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'tools') {
                echo 'class="active" ';
            }
            echo 'href="tools.php">Tools</a>
            </li>';
        } elseif ($folder == 1) {
            // add client sections to navigation bar
            echo '<li class="nav_item">
                <a ';
            if ($page == 'index') {
                echo 'class="active" ';
            }
            echo 'href="index.php">Home</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'tools') {
                echo 'class="active" ';
            }
            echo 'href="tools.php">Tools</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'rented') {
                echo 'class="active" ';
            }
            echo 'href="#">Rented Tools</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'profile') {
                echo 'class="active" ';
            }
            echo 'href="#">Profile</a>
            </li>';
        } elseif ($folder == 2) {
            // add admin sections to navigation bar
            echo '<li class="nav_item">
                <a ';
            if ($page == 'index') {
                echo 'class="active" ';
            }
            echo 'href="index.php">Home</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'tools') {
                echo 'class="active" ';
            }
            echo 'href="tools.php">Tools</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'clients') {
                echo 'class="active" ';
            }
            echo 'href="#">Clients</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'rent') {
                echo 'class="active" ';
            }
            echo 'href="#">Rent Tool</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'return') {
                echo 'class="active" ';
            }
            echo 'href="#">Return Tool</a>
            </li>
            <li class="nav_item">
                <a ';
            if ($page == 'add_tool') {
                echo 'class="active" ';
            }
            echo 'href="#">Add Tool</a>
            </li>';
        }
        ?>
    </ul>
</div>