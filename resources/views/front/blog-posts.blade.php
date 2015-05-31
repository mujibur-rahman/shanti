<?php
$con = mysql_connect("localhost", "i1170387_gq241", "S^SwaD2Ci398@[0") or die("error");
mysql_selectdb("i1170387_gq241");
$sql = "select * from  gq24_posts ORDER BY ID ASC limit 2";
$result = mysql_query($sql, $con);
?>
<div class="blog-post">
        <h1>BLOG POSTS</h1>
        <div class="pic-area">
<?php
while ($row = mysql_fetch_assoc($result)) {

?>                <div class="pic-box">
                       <a href="<?php echo $row['guid'];?>" _target="blank"> <img src="/img/blog-post-pic-1.png"></a><br>
                        <p><?php echo $row['post_title'];?></p>
                        <div class="clearfix"></div>
                </div>
<?php } ?>
                <div class="clearfix"></div>

        </div>
</div>

