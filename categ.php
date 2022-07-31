<?php
include("includes/header.php");
?>

<style>

    body{
        background-color: #FF6F61;
        background-image: none;
    }
</style>


<?php 

$cuisines=array("Glen's bake house","Secret story","Tiot brewpub","Jet lag","Plan B","Communiti","Fat-owl Gastropub",
"Daddy bangalore");
$cusinesImage=array("https://imgmedia.lbb.in/media/2019/04/5cba8a97ef5cb6217dc2f86b_1555729047876.jpg",
"https://b.zmtcdn.com/data/pictures/1/19890381/b7de2e3535b943805e93ec26543291f9.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*",
 "https://content3.jdmagicbox.com/comp/bangalore/u1/080pxx80.xx80.101215095310.f5u1/catalogue/toit-brew-pub-indira-nagar-2nd-stage-bangalore-microbrewery-pubs-30mc81k.jpg",
"https://b.zmtcdn.com/data/pictures/7/18777147/7b41100b682770b25cef8de26ef38dba.jpg",
"https://im1.dineout.co.in/images/uploads/restaurant/sharpen/8/k/g/p85575-16162391976055da5d128fb.jpg?tr=tr:n-medium",
"https://media-cdn.tripadvisor.com/media/photo-s/0f/a7/d4/b8/restaurant-from-outside.jpg",
 "https://content3.jdmagicbox.com/comp/bangalore/k1/080pxx80.xx80.190802191316.f9k1/catalogue/fat-owl-jp-nagar-1st-phase-bangalore-fast-food-hmsocwqfa9.jpg",
 "https://blog.dineout-cdn.co.in/blog/wp-content/uploads/2020/08/TERRACE-16-1-2-700x400.jpg",
);

$entertainment=array("Orion mall","Mantri square mall","Phoenix mall","UB city mall","Gopalan mall","Central mall","Lulu mall");
$historical=array();

?>

<?php 


$name=$_GET['name']; 

if($name=='cuisines')
{
    $arr=$cuisines;
    $img=$cusinesImage;
}
else if($name=='entertainment')
{
    $arr=$entertainment;
}  


?>

<?php for($x=0;$x<8;$x++){?>
<div class="d-flex justify-content-around mt-2" id="categ">
     
        <a href="">
        <div class="card mt-3" style="width: 18rem;">
        <img class="card-img-top" src="<?php print $img[$x] ?>" alt="Card image cap">
        <div class="card-body">
          <p class="card-text"><?php print $arr[$x];  ?></p>
        </div>
       </div>
       </a>
       </div>

   <?php } ?>   








<?php
include("includes/footer.php");
?>