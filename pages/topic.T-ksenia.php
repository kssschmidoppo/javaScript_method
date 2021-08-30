<?php
require_once '../config.php';
require_once 'header.inc.php';
?>
<main>
    <h1>Local Storage!</h1>
        <div class="left">
            <p>A hard drive or solid state drive. </p>
            <img src="../images/localStorage.png" alt="screenshot of localStorage application"/>
        </div>
        <div class="right" >
            <p>To store local data, today’s browsers support a local storage and a session storage. 
                The difference session storage is only available per tab,
                stored data is deleted once you close the tab with the application. 
                The local storage data will be there as long until you delete it.
            </p>
        </div>
        <hr>
    <h2>LocalStorage has four methods</h2>
    <ol>
        <li>localStorage.setItem("data",data)</li>
        <li>localStorage.getItem("data")</li>
        <li>localStorage.removeItem("data")</li>
        <li>localStorage.remove()</li>
    </ol>
  
    <h2><strong>FEW EXAMPLES:</strong></h2>
<!---------KEY FELD........................................-->          
    <h2>Example from Webplatform</h2></a>
    <section>
        <label for="key">Key:</label>
        <input type="text" id="key" value="" placeholder="key">
        <br>
        <label for="value">Value:</label>
        <input type="text" id="value" value="" placeholder="value">
        <br>
        <button class="btn" type="button" id="set-local">Save to localStorage</button>
    </section>
    <hr>
    <section>
        <label for="get-key">Key:</label>
        <input type="text" id="get-key" value="" placeholder="get key">
        <button class="btn" type="button" id="get-local">Get from localStorage</button>
        <output id="output"></output>
    </section>
    <hr>
    <section>
        <button class="btn" type="button" id="clear">Clear localStorage</button>
    </section>
<!-------COMMENT FELD.............................-------->                                              
    <h2>Example from CareerKarma</h2></a>
    <div>         	
    <h3>Customer Feedback</h3>         
        <p>We'd love to learn more!</p>         	
        <form>             
            <label for="name">Name: </label>             	
            <input id="name" type="text" /><br /><br />              	
            <label for="email">Email: </label>             
            <input id="email" type="email" /><br /><br />              	
            <label for="feedback">Message: </label><br /><br />       
            <textarea id="feedback"></textarea><br /><br />     
            <button class="btn" id="saveButton">Save form</button>             
            <button class="btn" id="retrieveButton">Retrieve form</button> 
            <button class="btn" id="clear">Clear</button>    
        </form>
    </div>    
    <hr>
<!---------MY TRY........................................-->              
    <h2>my try</h2>
    <div>
        <textarea id="textMe" placeholder="try me..."></textarea><br>
            <button class="btn" onclick="data(0)" id="saveMe">Save</button><br>
            <button class="btn" onclick="data(1)" id="resetMe">Clear Input Field</button><br>
            <button class="btn" onclick="data(2)" id="getMe">Get</button><br>
            <button class="btn" onclick="data(3)" id="clearMe">Clear LocalStorage</button><br>
        <textarea id="outputMe" placeholder="output"></textarea><br>
    </div>

<!-- RELATED MATERIAL ---------------------------------------------------->
  <h3>Related Topics</h3>
  <p>Web Storage, Session Storage, Cookies</p>

  <h3>More Examples</h3>
  <a href="#">Hamza</a><br>
  <a href="#">...</a><br>

  <h3>More Info</h3>
  <a href="https://webplatform.github.io/docs/apis/web-storage/Storage/localStorage/">Webplatform Source</a><br>
  <a href="https://careerkarma.com/blog/javascript-localstorage/">CareerKarma Source</a>

  <script src="/projects/js_nutshell/js/topic.T-ksenia.js"></script>
  
  <?php include $_SERVER['HOME'] . '/projects/js_nutshell/inc/footer.inc.php'; ?>

</main>
    