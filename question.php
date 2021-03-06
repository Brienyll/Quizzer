<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>PHP Quizzer</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="current">Question 1 of 5</div>
        <p class="question">
          What does PHP stand for?
        </p>
        <form action="process.php" method="post">
          <ul class="choices">
            <li><input type="radio" name="choice" value="1" /> PHP: Hypertext Preprocessor</li>
            <li><input type="radio" name="choice" value="1" /> Private Home Page</li>
            <li><input type="radio" name="choice" value="1" /> Personal Home Page </li>
            <li><input type="radio" name="choice" value="1" /> Personal Hypertext Preprocessor</li>
          </ul>
          <input type="submit" value="Submit" />
        </form>
      </div>
    </main>
    <footer>
      <div class="container">
        Copyright &copy; 2017, PHP Quizzer
      </div>
    </footer>
  </body>
</html>
