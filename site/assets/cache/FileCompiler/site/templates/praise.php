<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<?php
    echo "<h1 class='praise-title'>{$page->About_Name}</h1>";

    foreach($page->Praise_Section as $section) {
        echo "<div class='row praise-section'>";
        echo    "<div class='col-12 praise-container'>";
        echo        "<div class='praise-item'>{$section->body}</div>";
        echo    "</div>";
        echo "</div>";
    }
?></div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>