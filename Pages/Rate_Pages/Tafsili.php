<?php
$Me=$_SESSION['id'];
echo $id=$_POST['id'];
$query=mysqli_query($connection_maghalat,"select * from article where id='$id'");
foreach ($query as $item) {

}
$art_id=$item['article_id'];
$query=mysqli_query($connection_mag,"select * from mag_articles where id='$art_id'");
foreach ($query as $art_info){}
?>
<!-- Main content -->
<form method="post" action="build/php/inc/Tafsili_Rate_Inc.php">
    <section class="content">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">ثبت ارزیابی تفصیلی</h3>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped" id="myTable">
                    <tbody>
                    <tr>
                        <th>جشنواره</th>
                        <th>نام اثر</th>
                        <th>نوع اثر</th>
                        <th>گروه علمی</th>
                        <th>زبان</th>
                        <th>فایل مقاله</th>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            $festival_id=$art_info['festival_id'];
                            $query=mysqli_query($connection_maghalat,"select * from festival where id='$festival_id'");
                            foreach ($query as $festival_info){}
                            echo $festival_info['name'];
                            ?>
                        </td>
                        <td>
                            <?php echo $art_info['subject']; ?>
                        </td>
                        <td>
                            <?php echo $art_info['type'] ?>
                        </td>
                        <td>
                            <?php
                            if ($item['tafsili1_ratercode_g1'] == $Me or $item['tafsili2_ratercode_g1'] == $Me or $item['tafsili3_ratercode_g1'] == $Me) {
                                $groupID = $art_info['scientific_group_1'];
                                $query = mysqli_query($connection_maghalat, "Select * from scientific_group where id='$groupID'");
                                foreach ($query as $groupInfo) {
                                }
                                echo $groupInfo['name'];
                            } elseif ($item['tafsili1_ratercode_g2'] == $Me or $item['tafsili2_ratercode_g2'] == $Me or $item['tafsili3_ratercode_g2'] == $Me) {
                                $groupID = $art_info['scientific_group_2'];
                                $query = mysqli_query($connection_maghalat, "Select * from scientific_group where id='$groupID'");
                                foreach ($query as $groupInfo) {
                                }
                                echo $groupInfo['name'];
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $art_info['language'] ?>
                        </td>
                        <td>
                            <a id='no-link' style="color: #0a53be" target="_blank" href= "<?php
                            echo 'Files/Mag_Files/'.$art_info['file_url'];
                            ?>">
                                نمایش
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <center>
                <input type="hidden" value="<?php
                $id=$_POST['id'];
                ?>"
                       name="article_id"
                >
                <button type="submit" class="btn btn-block btn-success" style="width:20%" name="subject" value="<?php echo $_POST['rate_status'] ?>" >
                    ثبت ارزیابی
                </button>
            </center>
        </div>
    </section>
</form>
</div>



