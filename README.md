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
    <code>
    create_modal($id,$info)<br/>
    // $id    = data-target specified in text<br/>
    // $info  = content of the modal
    </code>
    <h4>stories/0.php</h4>
    <code>
    // Landing Page, format differs from all other pages.
    </code>
    <h4>stories/#.php</h4>
    <p>Includes HTML, with $modal[] PHP at the bottom</p>
    <pre>
      &lt;script&gt;var page = #;&lt;/script&gt;
      <br/>
      &lt;h2&gt;Topic&lt;/h2&gt;
      <br/>
      &lt;div class="row story topic#"&gt;
      <br/>
      &lt;div class="col-sm-12"&gt;
      <br/>
      ...
      <br/>
      &lt;a class="highlight" <b>data-toggle="modal"</b> data-target="<i>#1</i>"&gt;Link&lt;/a&gt;
      <br/>
      ...
      <br/>
      &lt;/div&gt;
      <br/>
      &lt;/div&gt;
      <br/>
      <br/>
      &lt;?php <br/>
        $modal[<i>1</i>] = '<br/>
        &lt;h3&gt;Title&lt;/h3&gt;
        <br/>&lt;p&gt;Response&lt;/p&gt;';<br/>
        ....
        <br/>
      ?&gt;
    </pre>
  
  </li>
</ul>

<h3>Resources</h3>

<ul>
  <li><b>Languages:</b> PHP, HTML, CSS, jQuery</li>
  <li><b>Style Framework:</b> Bootstrap 3.1.1</li>
</ul>
