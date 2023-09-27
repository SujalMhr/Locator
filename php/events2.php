<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/events.css">
        <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style2.css" />
    <title>LocatoR - Login</title>
</head>

<body>
    <?php 
    require '../components/nav.html';
?>

    <div id="docContainer">
      <div class="a_head">
        <h2 style="font-weight: 500">Upcoming events</h2>
      </div>
      <div class="a_body">
        <div class="docList">
          <div class="doc" id="doc">
            <div class="docImg" id="image">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeLJnzgcw-0NEcuH0joPa1I_-MCWg-yJ_v1FrDzT8&s"
                alt=""
              />
            </div>
            <div class="docInfo">
              <h3 id="name">Holi</h3>
              <p class="edu">BCA</p>
              <p class="speciality">Product Manager</p>
              <p class="experience">5+ years of experience</p>
              <p class="availability">9:00 AM to 5:00 PM (Tue,Thu)</p>
            </div>
          </div>

          <div class="doc">
            <div class="docImg" id="image">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeLJnzgcw-0NEcuH0joPa1I_-MCWg-yJ_v1FrDzT8&s"
                alt=""
              />
            </div>
            <div class="docInfo">
              <h3 id="name">Dashain</h3>
              <p class="edu">BIT</p>
              <p class="speciality">Developer</p>
              <p class="experience">10 years of experience</p>
              <p class="availability">9:00 AM to 5:00 PM (Tue,Thu)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>