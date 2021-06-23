
<?php

    if(isset($_POST['searchTerm'])) {
        echo "Hello World!";
    };

?>

<form 
action=""
method="post">
    <input type="text" name="searchTerm">
    <input type="submit" value="Search">
</form>