<?php
    include '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'test' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'init.php';
    $view->render('snippets','calculator');
?>
    <script style="javascript">
        var a = document.getElementById("snippetsItem1");
        a.className += " activeLink";
    </script>
