<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<div class='contact-container'>
    <table id="contact-table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sent</th>
                <th>Contact Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($page->children as $child) {
                $truncatedBody = $child->body;
                if (strlen($child->body) > 24) {
                    $truncatedBody = substr($child->body, 0, 24) . '...';
                }

                echo "<tr class='row-link' href='{$child->url}'>";
                    echo "<td>{$datetime->date('M j, Y g:i a', $child->created)}</td>";
                    echo "<td>{$child->title}</td>";
                    echo "<td>{$child->email}</td>";
                    echo "<td>{$child->Email_Subject}</td>";
                    echo "<td>{$truncatedBody}</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>