<html>
<head>
	<title>Color Form</title>
</head>
<body>
    
    <form action="colors.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" required minlength="3"><br><br>
        <label for="email">E-mail: </label>
        <input type="text" name="email" required><br><br>
        <label for="color-select">Your Favorit Color:</label>
        <select name="color-select" required>
            <option value="">--Please choose an option--</option>
            <option value="yellow">Yellow</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="orange">Orange</option>
            <option value="white">White</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
        
</html>