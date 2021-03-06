<?php
    include_once './config/database.php';
    include_once './objects/portfolio.php';

    if(isset($_GET['id'])) {
        $getSingle = getProjByID($_GET['id']);
    } else {
        return 'cannot get project info';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <?php while($row = $getSingle->fetch(PDO::FETCH_ASSOC)):?>

    <title><?php echo $row["title"];?></title>
</head>
<body>

    <p id="webID" class="hidden"><?php echo $row["ID"];?></p>
    
    <?php include 'header.php';?>

    <section id="portHero">
        <img class="deskHero" src="./public/images/<?php echo $row["img_1"];?>" alt="<?php echo $row["title"];?> hero image">
        <img class="tabHero" src="./public/images/<?php echo $row["img_1t"];?>" alt="<?php echo $row["title"];?> hero image">
        <img class="mobHero" src="./public/images/<?php echo $row["img_1m"];?>" alt="<?php echo $row["title"];?> hero image">
        <div class="heroText">
            <p>Project <?php echo $row["ID"];?></p>
            <h1><?php echo $row["title"];?></h1>
            <p class="purP"><?php echo $row["purposes"];?></p>
        </div>
    </section>

    <section id="mainContent">
        <div class="mainCL">
            <div class="mainCL-t">
                <h2>The Challenge</h2>
                <p><?php echo $row["description"];?></p>
            </div>
            <div class="mainCL-b">
                <h3>Live Website</h3>
                <a href="<?php echo $row["link"];?>" target="_blank"><?php echo $row["link"];?></a>
            </div>
        </div>
        <div class="mainCR">
            <div class="mainCR-1">
                <h3>Date</h3>
                <p><?php echo $row["date"];?></p>
            </div>
            <div class="mainCR-2">
                <h3>Lead</h3>
                <p><?php echo $row["lead"];?></p>
            </div>
            <div class="mainCR-3">
                <h3>Collaborators</h3>
                <p><?php echo $row["collab"];?></p>
            </div>
            <div class="mainCR-4">
                <h3>Technologies</h3>
                <p><?php echo $row["tech"];?></p>
            </div>
        </div>
    </section>

    <section id="imgDisplay">
        <img src="./public/images/<?php echo $row["img_2"];?>" alt="img of <?php echo $row["title"];?>">
        <div class="imgDBot">
            <img src="./public/images/<?php echo $row["img_3"];?>" alt="img of <?php echo $row["title"];?>">
            <div class="imgDBot-r">
                <img src="./public/images/<?php echo $row["img_4"];?>" alt="img of <?php echo $row["title"];?>">
                <img src="./public/images/<?php echo $row["img_5"];?>" alt="img of <?php echo $row["title"];?>">
            </div>
        </div>
    </section>

    <div id="pn-page">
        <a href="" id="p-page" class="pn noNeed">
            <svg version="1.1" id="pre_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.2 45.3" style="enable-background:new 0 0 26.2 45.3;" xml:space="preserve"><style type="text/css"> .st0{fill:#434345;}</style><title>arrow_down</title><path class="st0" d="M25.3,1.7c2.1,3-1,5-1,5l-15.2,16h0.1l15.3,16c0,0,3,2,1,5c-2,3-5.1,1-5.1,1L0,22.7l20.2-22C20.2,0.7,23.2-1.3,25.3,1.7z"/></svg>
            <p>Previous Project</p>
        </a>
        <a href="" id="n-page" class="pn noNeed">
            <p>Next Project</p>
            <svg version="1.1" id="next_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.2 45.3" style="enable-background:new 0 0 26.2 45.3;" xml:space="preserve"><style type="text/css">.st0{fill:#434345;}</style><title>arrow_down</title><path class="st0" d="M0.9,1.7c-2.1,3,1,5,1,5l15.2,16H17l-15.3,16c0,0-3,2-1,5c2,3,5.1,1,5.1,1l20.4-22L6,0.7C6,0.7,3-1.3,0.9,1.7z"/></svg>
        </a>
    </div>
    
    <?php endwhile; ?>

<?php include 'footer.php';?>
</body>
</html>