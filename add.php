<a href="index.php?id=1">Go back</a>

<form style="position: absolute; top: 10%; left: 2%; display: flex; flex-direction: column;" action="doAdd.php" method="post">
    <label for="title">title</label> <input type="text" name="title">
    <label for="description">description</label> <input type="text" name="description">
    <label for="label">label</label> <input type="text" name="label">
    <label for="alt">alt</label> <input type="text" name="alt">
    <label for="src">src</label> <input type="text" name="src">
    <input type="submit" value="add">
</form>
<?php include "includes/footer.php"?>