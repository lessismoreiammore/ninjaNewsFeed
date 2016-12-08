<?php
include 'data.php'; //Collects arrays with user data.
include 'functions.php'; //Collects functions.
?>

<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8">
      <meta content="IE=edge" http-equiv="X-UA-Compatible">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>ninja news feed</title>
      <link href="css/modulr.css" rel="stylesheet">
      <link href="https://decorator.io/tools/modulr.min.css" rel="stylesheet">
      <link href=
      "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
      rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

<!-- WRAPPER -->
      <div class="wrapper center padding-40">

           <h1>Ninja News Feed</h1>

<!-- INPUT FORM -->
<div class="white shadow padding-10 margin-bottom">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form xl relative" method="POST">
<!-- logo part  -->
        <div class="col-1 col-persist -margin">
          <img alt="logo" class="pull-left width-100 round" src="images/logo.gif">
        </div>
<!--input part  -->
        <div class= "col-9 col-persist gutter-h-10 padding-top-5 -margin">
            <textarea name="postComment" placeholder="Enrty text"></textarea>
            <input name="postTitle" placeholder="Entry title" type="text">
            <input name="username" placeholder="Your username" type="text">
            <input name="password" placeholder="Your password" type="password">
        </div>
<!-- submit part  -->
        <div class="col-2 col-persist -margin">
            <input name="submit" type="submit" value="Post it!">
        </div>
    </form>
</div>
<!-- INPUT FORM ENDS -->

<!-- script to handle form -->
  <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $postTitle = $_POST["postTitle"];
    $postComment = $_POST["postComment"];
    $postDate = date("Y-m-d");

// The condition is set to pair the given username with the corresponding password.
    $isFound = false;
    $userIndex = -1;
    for($i = 0; $i< count($users); $i++){
      if($username == $users[$i]["Username"] && $password == $users[$i]["Password"]){
        $isFound = true;
        $userIndex = $i;
      }
    }

    if ($isFound){
      if (empty($postComment) || empty($postTitle) ) {
      ?>
    <div class="addedPosts">
    <p>
      <?php
    echo '<span style="font-weight: bold; color: white">' . "Add a title and a comment in order to post." . '</span>';
    ?>
    </p>
    </div>
    <?php
  }
  else {
      $newpost = array(
        "Title"=>$postTitle,
        "Text"=>$postComment,
       "Author"=>$username,
       "Date"=>$postDate
     );

     //push a new post to an data array posts
       array_push($posts, $newpost);
    // sort posts due to the publishing date
        sortPostsByDate();
      }
    }
  else {
    echo '<span style="font-weight: bold; color: white">' . "Wrong Username or Password, try again" . '</span>';
    }
  }
?>

<!-- ENTRY -->
  <?php

foreach ($posts as $post) {

    echo '<div class="item white shadow cf">';

//entry header
    echo '<div class="row padding">';
    echo '<div class="col-1 col-persist -margin">';
    avatars($post["Author"], $users);
    echo ' </div>';
// entry main part
    echo '<div class="col-11 col-persist gutter-h-10 padding-top-15">';
    posts($post["Title"], $post["Text"], $post["Author"], $post["Date"]);
    echo '</div>';
    echo '</div>';
      }
         ?>
<!-- ENTRY ENDS  -->

<!--  FOOTER -->
            <div class="item padding-10 white shadow">
                <a class=
                "btn fill-transparent hover-disable text-black pull-left" href=
                "#">&copy;lessismoreiammore</a> <a class=
                "btn fill-transparent hover-disable text-black pull-right"
                href="#">Made With: Modulr.css</a>
            </div>
<!-- FOOTER ENDS  -->

    </div>
</div>

<!-- WRAPPER ENDS -->
   </div>

</body>
</html>
