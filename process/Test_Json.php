<?php
$book = array(
    "title" => "JavaScript: The Definitive Guide",
    "author" => "David Flanagan",
    "edition" => 6
);
?>
<script type="text/javascript">
var book = <?php echo json_encode($book) ?>;
/* var book = {
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}; */

console.log(book);
</script>