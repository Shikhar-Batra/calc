<form method = "POST">
    <input type="number" name="num1" required>
    <select name="operations" required>
        <option value="ADD">+</option>
        <option value="SUB">-</option>
        <option value="MUL">*</option>
        <option value="DIV">%</option>
    </select>
    <input type="number" name="num2" required >
    <input type="submit" value="Save" name="submit">
</form>
<?php
include_once('test.php');

// $calculat = new Calculator();
// echo $calculat->calc();

