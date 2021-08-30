<?php include '../config.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/mainstyle.css">
  <link href="../libs/prism" rel="stylesheet" />

  <script src="../libs/prism"></script>
  <script src="../topic.F-ksenia.js"></script>
</head>

<body>

    <h1>Do... while</h1>

    <img src="/images/fchart.png" alt="Flowchart of JavaScript do...while loop"/>

    <p>
        The do...while statement creates a loop that executes 
        a specified statement until the test condition evaluates to false. 
        The condition is evaluated after executing the statement, 
        resulting in the specified statement executing at least once.
    </p>

    <h3>Syntax</h3>
    <pre class="language-css">
      <code class="language-css">

    &lt;script>
    do
      statement
    while (condition);
    &lt;/script>
          </code>
        </pre>

    <!-- EXAMPLE 1 ----------------------------------------------------------->
    <h3>In the following example, the do...while loop iterates at least once and 
      reiterates until i is no longer less than 5</h3>

    <pre class="language-css">
      <code class="language-css">
    &lt;script>
    var result = '';
    var i = 0;
    do {
      i += 1;
      result += i + ' ';
    }
    while (i > 0 && i < 5);
    // Despite i == 0 this will still loop as it starts off without the test

    console.log(result);

    &lt;/script>
          </code>
        </pre>

  <div>
    <button onclick="topicT1();">Run</button>
    <button onclick="clearResultText(1);">Clear</button>
    <p id="result-text-1" class="result-text">&nbsp;</p>
  </div>

  <!-- EXAMPLE 2 ----------------------------------------------------------->
  <h3>Display Numbers from 1 to 5</h3>

  <pre class="language-css">
    <code class="language-css">
  &lt;script>
  // program to display numbers
  let i = 1;
  const n = 5;

  // do...while loop from 1 to 5
  do {
      console.log(i);
      i++;
  } while(i <= n);

  &lt;/script>
      </code>
    </pre>

<div>
  <button onclick="topicT2();">Run</button>
  <button onclick="clearResultText(2);">Clear</button>
  <p id="result-text-2" class="result-text">&nbsp;</p>
</div>

  <!-- RELATED MATERIAL ---------------------------------------------------->
  <h3>Related Topics</h3>
  <p>Loops, While Loop, Infinite while Loop, For Loop</p>

  <h3>More Examples</h3>
  <a href="#">...</a><br>
  <a href="#">.../a><br>

  <h3>More Info</h3>
  <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/do...while#using_do...while">Statement - Do...While</a><br>
  <a href="https://www.programiz.com/javascript/while-loop">JavaScript while and do...while Loop</a>

</body>

</html>