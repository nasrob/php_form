<html>
<body>

    Hello <?php echo htmlspecialchars($_POST["name"]); ?><br>
    Your email address is: <?php echo htmlspecialchars($_POST["email"]); ?>
    and your favorit color is: <?php echo htmlspecialchars($_POST["color-select"]); ?>

</body>
</html>