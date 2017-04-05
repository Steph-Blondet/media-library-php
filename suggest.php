<?php
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("includes/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
    <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>

    <form method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name"/>
    </form>

  </div>

</div>

<?php include("includes/footer.php"); ?>
