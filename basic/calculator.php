<form action="calcu.php" method="POST">
    <label for="">Value 1</label>
    <input type="number" id="fname" name="value1">
    <br />

    <label for=""> Value 2</label>
    <input type="number" id="lname" name="value">
    <br />

    <label for="option"> Choose a Option </label>
    <select name="action_type" id="option">
        <option value="add">Addition </option>
        <option value="sub">Subtraction </option>
        <option value="mul">Multilication </option>
        <option value="div">diviotion </option>

    </select>
    <br />

    <input type="submit" value="submit">
</form>