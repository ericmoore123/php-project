
<!-- PHP Script Start -->
<?php

    if(isset($_POST['searchTerm'])) {
        echo $_POST['searchTerm'];
    };

?>

<!-- HTML Start -->
<form 
action=""
method="post">
    <input type="text" name="searchTerm"> 
    <input type="submit" value="Search">
</form>