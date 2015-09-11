<!doctype html>
<html>
  <head>
    <title>ATM</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <form action="index.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
    <div class="header">
      <div><img src="http://pictures.boxxspring.com/pictures/87401?crop=none" /></div>
      <div class="title">Bank of Yeezus</div>
    </div>

    <div class="account">
      <h2>Checking</h2>
      <div class="balance">$<?php echo (int)$_POST['checking']; ?></div>
      <form action="index.php" method="post">
        <input type="text" placeholder="enter an amount" name="checking"/>
        <input type="submit" value="Withdraw" name="withdrawChecking" />
        <input type="submit" value="Deposit" name="depositChecking" />

      </form>
    </div>
    <div class="account">
      <h2>Savings</h2>
      <div class="balance">$0</div>
      <form>
        <input type="text" placeholder="enter an amount" />
        <input type="button" value="Deposit" name="depositSavings" />
        <input type="button" value="Withdraw" name="withdrawSavings" />
      </form>
    </div>

  </body>
</html>
