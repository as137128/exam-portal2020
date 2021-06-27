<?php
include "../connection.php";
$id=$_GET["id"];
$id1=$_GET["id1"];
mysqli_query($link,"delete from questions where id=$id ")

?>
<script>
alert("Question Delete Successfully");
    window.location="add_edit_ques.php?id=<?php echo $id1 ?>";
</script>