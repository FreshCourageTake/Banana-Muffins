<?php include('./_head.php'); // include header markup ?>

<?php
    echo "<img class='title-image' src='{$page->Header_Image->url}'/>";
    foreach($page->Areas as $area) {
        echo "<div class='row area-section'>";
        echo    "<div class='row'>";
        echo        "<div class='col-md-4 area-image-container'>";
        echo 	        "<img class='area-image' src='{$area->Story_Image->url}'/>";
        echo 	        "<a class='area-link' href='{$area->URL}'><em><strong>SEARCH {$area->Area_Name} PROPERTIES</strong></em></a>";
        echo        "</div>";
        echo        "<div class='col-md-8'>";
        echo 	        "<div class='area-text'>{$area->Story}</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
    }
?>

<?php include('./_foot.php'); // include footer markup ?>