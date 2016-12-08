<?php
$users = array(
  array("Name"=>"Leonardo", "User-id" => 1, "Avatar"=>'<img src="images/avatars/leonardo.jpg" width="100px" height="100px">', "Username"=>"Leonardo", "Password"=>"Leo123"),
  array("Name"=>"Donatello", "User-id" => 2, "Avatar"=>'<img src="images/avatars/donatello.jpg" width="100px" height="100px">', "Username"=>"Donatello", "Password"=>"Don123"),
  array("Name"=>"Michelangello", "User-id" => 3, "Avatar"=>'<img src="images/avatars/michelangello.jpg" width="100px" height="100px">', "Username"=>"Michelangello", "Password"=>"Mich123"),
  array("Name"=>"Raphael", "User-id" => 4, "Avatar"=>'<img src="images/avatars/raphael.jpg" width="100px" height="100px">', "Username"=>"Raphael", "Password"=>"Raph123"),
  array("Name"=>"Splinter", "User-id" => 4, "Avatar"=>'<img src="images/avatars/splinter.jpg" width="100px" height="100px">', "Username"=>"Splinter", "Password"=>"Spl123"),
);
$posts = array(
  array("Title"=>"Title", "Text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
   "Author"=>$users[0]["Name"], "Date"=>"2016-07-23"),
  array("Title"=>"Title", "Text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
   "Author"=>$users[1]["Name"], "Date"=>"2016-02-27"),
  array("Title"=>"Title", "Text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
   "Author"=>$users[2]["Name"], "Date"=>"2016-09-09"),
  array("Title"=>"Title", "Text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
   "Author"=>$users[3]["Name"], "Date"=>"2016-04-15"),
   array("Title"=>"Title", "Text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    "Author"=>$users[4]["Name"], "Date"=>"2016-11-15"),
);
function sortPostsByDate(){
    global $posts;
    foreach ($posts as $key => $row) {
        $mid[$key]  = $row["Date"];
    }
    array_multisort($mid, SORT_DESC, $posts);
}
sortPostsByDate();
