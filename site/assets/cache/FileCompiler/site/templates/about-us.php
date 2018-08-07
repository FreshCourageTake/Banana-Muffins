<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<?php
    foreach($page->About_Sections as $section) {
        echo "<div class='row about-section'>";
        echo    "<div class='col-12 name-titles'>";
        echo        "<h1 class='about-name'>{$section->About_Name}</h1>";
        echo        "<div class='about-titles'>{$section->About_Titles}</div>";
        echo    "</div>";
        echo    "<div class='row'>";
        echo        "<div class='col-md-4'>";
        echo 	        "<img class=' about-image' src='{$section->images->first()->url}'/>";
        echo        "</div>";
        echo        "<div class='col-md-8'>";
        echo 	        "<div class='about-text'>{$section->body}</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
    }
?>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>