<?php require "header.php"; ?>

<head>
   <link rel="stylesheet" href="css/learn.css">
</head>

<!-- Contents of learning chapters -->
<!-- Hidden initially till Menu button pressed-->

<body>


   <nav class="contents">
      <ul>
         <li><a href="Learn.php">What is HTML?</a></li>
         <li><a href="Structure">Structure</a></li>
         <li><a href="ElementAndTags" id="here">Elements & Tags</a></li>
         <li><a href="LinksAndImages">Links and Images</a></li>
         <li><a href="Attributes">Attributes</a></li>
      </ul>
   </nav>

   <!--Menu button-->


   <section class="info">

      <div>
         <h2>Element and Tags</h2>

         <img src="images/Element.svg" alt="Showing a html element and its tags">
         <h4 class="subHeadings">Dissection of an HTML element</h4>

         <ol>
            <li>
               <strong>Opening tag - <br></strong>
               <p class="contentP">
                  The opening tag consists of the name of the HTML element, in this case
                  h1, wrapped in opening and closing angled brackets. This tells us where the element
                  starts to take effect. ie - where the h1 (header 1) begins.
               </p>
            </li>
            <li>
               <strong>Closing tag - <br></strong>
               <p class="contentP">
                  The closing tag is similar to the opening tag, except it includes a forward slash
                  before the element name, this indicates where the element ends.
               </p>
            </li>
            <li>
               <strong>Content - <br></strong>
               <p class="contentP">
                  This is the content the element contains, which the user will see on the webpage. In this
                  case, it is text.
               </p>
            </li>
            <li>
               <strong>Element - <br></strong>
               <p class="contentP">
                  The element is composed of the opening tag, the closing tag and the content.
                  Together, these components make up the HTML element.
               </p>
            </li>
         </ol>
         <p class="contentP">
            <strong>It is worth noting that not all elements have a closing tag. Some are self closing, which will be explored
               in the next chapter.</strong>
         </p>
      </div>

   </section>

   <section class="info">
      <h4 class="subHeadings">Commonly used HTML elements</h4>
      <p class="contentP">
         Here are some of the commonly used elements within HTML. There are many elements so a link to
         a reference will be put towards the end of the chapter.
      </p>

      <table class="elementTable">
         <tr>
            <th>Element</th>
            <th>Description</th>
            <th>Opening tag</th>
            <th>Closing tag</th>
         </tr>
         <tr>
            <td>html</td>
            <td>
               represents the root (top-level element) of an HTML document, so it is also referred to as the
               root element. All other elements must be descendants of this element.</td>
            <td>&lt;html&gt;</td>
            <td>&lt;/html&gt;</td>
         </tr>
         <tr>
            <td>body</td>
            <td>represents the content of an HTML document. There can be only one body element in a document.</td>
            <td>&lt;body&gt;</td>
            <td>&lt;/body&gt;</td>
         </tr>
         <tr>
            <td>header</td>
            <td>represents introductory content, typically a group of introductory or navigational aids.
               It may contain some heading elements but also a logo, a search form, an author name, and other elements.</td>
            <td>&lt;header&gt;</td>
            <td>&lt;/header&gt;</td>
         </tr>
         <tr>
            <td>footer</td>
            <td>A footer typically contains information about the author of the section, copyright data or links to related documents.</td>
            <td>&lt;footer&gt;</td>
            <td>&lt;/footer&gt;</td>
         </tr>
         <tr>
            <td>nav</td>
            <td>represents a section of a page whose purpose is to provide navigation links, either within the current document or
               to other documents. Common examples of navigation sections are menus, tables of contents, and indexes.</td>
            <td>&lt;nav&gt;</td>
            <td>&lt;/nav&gt;</td>
         </tr>
         <tr>
            <td>main</td>
            <td>represents the dominant content of the body of a document. The main content area consists of content that
               is directly related to or expands upon the central topic of a document, or the central functionality of an application.</td>
            <td>&lt;main&gt;</td>
            <td>&lt;/main&gt;</td>
         </tr>
         <tr>
            <td>article</td>
            <td>represents a self-contained composition in a document, page, application, or site, which is intended to be independently
               distributable or reusable</td>
            <td>&lt;article&gt;</td>
            <td>&lt;/article&gt;</td>
         </tr>
         <tr>
            <td>aside</td>
            <td>represents a portion of a document whose content is only indirectly related to the document's main content.</td>
            <td>&lt;aside&gt;</td>
            <td>&lt;/aside&gt;</td>
         </tr>
         <tr>
            <td>section</td>
            <td>represents a standalone section — which doesn't have a more specific semantic element to represent
               it — contained within an HTML document.</td>
            <td>&lt;section&gt;</td>
            <td>&lt;/section&gt;</td>
         </tr>
         <tr>
            <td>h1, <br>
               h2, <br>
               h3,<br>
               h4,<br>
               h5,<br>
               h6,<br>
            </td>
            <td>&lt;h1&gt;–&lt;h6&gt; elements represent six levels of section headings. &lt;h1&gt; is the highest
               section level and &lt;h6&gt; is the lowest.</td>
            <td>&lt;h1&gt;<br>
               &lt;h2&gt;<br>
               &lt;h3&gt;<br>
               &lt;h4&gt;<br>
               &lt;h5&gt;<br>
               &lt;h6&gt;<br>
            </td>
            <td>&lt;/h1&gt;<br>
               &lt;/h2&gt;<br>
               &lt;/h3&gt;<br>
               &lt;/h4&gt;<br>
               &lt;/h5&gt;<br>
               &lt;/h6&gt;<br>
            </td>
         </tr>
         <tr>
            <td>p</td>
            <td>represents a paragraph.</td>
            <td>&lt;p&gt;</td>
            <td>&lt;/p&gt;</td>
         </tr>
         <tr>
            <td>div</td>
            <td>The Content Division element is the generic container for flow content. It has no effec
                on the content or layout until styled using CSS (Cascading Style Sheets - A course for another time).</td>
            <td>&lt;div&gt;</td>
            <td>&lt;/div&gt;</td>
         </tr>
      </table>
   </section>

   <section class="info">
      <h4 class="subHeadings">Exercise</h4>
      <p class="contentP">
         <strong>Type out the following code and see the output in the editor below:</strong>
      </p>
      <pre>
         <code>&lt;!DOCTYPE html&gt;</code>
         <code>&lt;html&gt;</code>
         <code>   &lt;head&gt;</code>
         <code>      &lt;title&gt;Element and tags exercise&lt;/title&gt;</code>
         <code>   &lt;/head&gt;</code>
         <code>&lt;body&gt;</code>
         <code>&lt;!--I am a comment--&gt;</code>
         <code>   &lt;h1&gt;My name is Lewis&lt;/h1&gt;</code>
         <code>   &lt;p&gt;I am 24 years of age.&lt;/p&gt;</code>
         <code>&lt;/body&gt;</code>
         <code>&lt;/html&gt;</code>
      </pre>
      <iframe src="https://trinket.io/embed/html/7b689d16ce?runMode=autorun" width="100%" height="356" 
         frameborder="0" marginwidth="0" marginheight="0" allowfullscreen>
      </iframe>
      <p class="contentP" style="color: royalblue;">
         <strong>Experiment with some of the elements and see what output you can come up with!</strong>
      </p>
   </section>

   <section class="info">
      <p class="chapterEnd">Next chapter we will go into detail about Links and Images</p>
      <a href="LinksAndImages"><button class="button">Next</button></a>
   </section>

   <?php
   if (isset($_SESSION['userid'])) {
      $user = $_SESSION['username'];
      echo '<a href="quiz/quiz3/quiz.php" id="quizLink"><button class="button">Take a Quiz!</button></a>';
   }
   ?>
</body>
<?php require "footer.php"; ?>