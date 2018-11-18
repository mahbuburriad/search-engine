<?php
if(isset($_GET["term"])){
$term = $_GET["term"];
}
else{
    exit( "You Must Enter Some text Search");
}

if(isset($_GET["type"])){
$type = $_GET["type"];
}
else{
    $type = "sites";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="assets/images/logo.png" rel=icon type="image/png">
    <title>Search Engine</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="headerContent">
                <div class="logoContainer">
                   <a href="index.php"><img src="assets/images/logo-name.png" alt="riddle search image"></a>
                </div>
                
                <div class="searchContainer">
                    <form action="search.php" method="get">
                        <div class="searchBarContainer">
                            <input type="text" class="searchBox" name="term">
                            <button class="searchButton"><img src="assets/images/search.png" alt="Search Icon"></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tabsContainer">
                    <ul class="tabList">
                        <li class="<?php echo $type == 'sites' ? 'active' : '' ?>"><a href='<?php echo "search.php?term=$term&term=sites"; ?>'>Sites</a></li>
                         <li class="<?php echo $type == 'images' ? 'active' : '' ?>"><a href='<?php echo "search.php?term=$term&term=images"; ?>'>Images</a></li>
                    </ul>
                </div>
        </div>
    </div>
</body>
</html>