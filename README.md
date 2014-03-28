<h1>OpEd Magazine Prototype</h1>

<p>The OpEd Magazine prototype was developed for the Reese News Lab to demonstrate the feasibility of a a digital, opinion-based magazine that changes the way readers access intelligent and interesting commentary on trending issues. It pits insightful and witty contributors against one another to cover sports, entertainment, politics, business, lifestyle and pop-culture.</p>

<p>This prototype utilizes stories written by UNC students or publicly available stories about specific topics.</p>

<p>The purpose of this prototype is to allow understand how users would test the product and learn from their reactions to it.</p>

<h3>Compatibility</h3>

<p>This prototype is meant to be demonstrated on iPads and thus has only been tested in iPad and iPad mini, as well as Google Chrome.</p>

<h3>Features</h3>

<ul>
  <li>Google Analytics tracking on each link, generated manually, through PHP or through jQuery</li>
  <li>PHP created modals for commentary
    <h4>includes/functions.php</h4>
    <pre>
    create_modal($id,$info)
       // $id    = data-target specified in text
       // $info  = content of the modal
    
    add_navigation($page){
      switch($page){
        // Add another line to specify the opposition. For instance, if you create page "7" and the opposition is page "8", create the following:
        case 7: $sides = 8; break;
        case 8: $sides = 7; break;
      }
      
      // Randomizes which page in a category the user views next.
      $category = rand(7,8);
      
      // Add the new category to the dropdown menu
      &lt;ul class="dropdown-menu"&gt;
        ...
        &lt;li&gt; 
          &lt;a ... href="?s='.$category.'"&gt;Category Name&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt; 
        
    }
    </pre>
    <h4>index.php</h4>
    <p>Provides a wrapper for each story.
    <pre>
      add_navigation($page); // Refers to functions.php
      ...
      foreach($modal as $key=>value){
        // Uses functions.php to create modal, with variables specified at the bottom of each stories/#.php file
        echo create_modal($key,$modal[$key]);
      }
    </pre>
    <h4>stories/0.php</h4>
    <p>Customized for display on landing page.</p>
    <h4>stories/#.php</h4>
    <p>Includes HTML, with $modal[] PHP at the bottom</p>
    <pre>
      &lt;script&gt;var page = #;&lt;/script&gt;
      
      &lt;h2&gt;Topic&lt;/h2&gt;
      &lt;div class="row story topic#"&gt;
        &lt;div class="col-sm-12"&gt;
        ...
          &lt;a class="highlight" <b>data-toggle="modal"</b> data-target="<i>#1</i>"&gt;Link&lt;/a&gt;
        ...
      
        &lt;/div&gt;
      &lt;/div&gt;
      
      &lt;?php
      $modal[<i>1</i>] = '
        &lt;h3&gt;Title&lt;/h3&gt;
        &lt;p&gt;Response&lt;/p&gt;';
        ....
        
      ?&gt;
    </pre>
  
  </li>
</ul>

<h3>Resources</h3>

<ul>
  <li><b>Languages:</b> PHP, HTML, CSS, jQuery</li>
  <li><b>Style Framework:</b> Bootstrap 3.1.1</li>
</ul>

<h3>Resources</h3>

<ul>
  <li><b>Languages:</b> PHP, HTML, CSS, jQuery</li>
  <li><b>Style Framework:</b> Bootstrap 3.1.1</li>
</ul>

<h3>Demo</h3>

<p>The original, live instance of this site can be viewed at <a href="http://oped.reesenewslab.org">http://oped.reesenewslab.org</a></p>
