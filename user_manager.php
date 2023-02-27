<?php include_once __DIR__ . '/header.php';
if ($_SESSION['head']==3):
if (isset($_GET['UserFounded'])):
    ?>
    <div class="card card-danger">
        <div class="card-header">
            <center>
                <h3 class="card-title">کاربر وارد شده در سیستم یافت شد (کاربر تکراری)</h3>
            </center>
        </div>
        <!-- /.card-header -->
    </div>
<?php
elseif (isset($_GET['UserAdded'])):
    ?>
    <div class="card card-success">
        <div class="card-header">
            <center>
                <h3 class="card-title">کاربر جدید '<?php echo $_GET['user'] ?>' با موفقیت اضافه شد</h3>
            </center>
        </div>
        <!-- /.card-header -->
    </div>
<?php endif; ?>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت کاربر جدید</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="build/php/inc/Add_User.php" id="Add_User">
            <div class="card-body">
                <center>
                    <table style="width: 80%" class="table table-bordered">
                        <tr>
                            <th>نام کاربری (کد ملی)*</th>
                            <td>
                                <input type="text" class="form-control" id="username"
                                       placeholder="نام کاربری (کد ملی) را وارد کنید" name="username">
                            </td>
                        </tr>
                        <tr>
                            <th>رمز عبور*</th>
                            <td>
                                <input type="password" class="form-control" id="password"
                                       placeholder="رمز عبور را وارد کنید" name="password">
                            </td>
                        </tr>
                        <tr>
                            <th>نام*</th>
                            <td>
                                <input type="text" class="form-control" id="name" placeholder="نام را وارد کنید"
                                       name="name">
                            </td>
                        </tr>
                        <tr>
                            <th>نام خانوادگی*</th>
                            <td>
                                <input type="text" class="form-control" id="family"
                                       placeholder="نام خانوادگی را وارد کنید" name="family">
                            </td>
                        </tr>
                        <tr>
                            <th>تلفن همراه*</th>
                            <td>
                                <input type="text" class="form-control" id="mobile"
                                       placeholder="تلفن همراه را وارد کنید" name="mobile">
                            </td>
                        </tr>
                        <tr>
                            <th>جنسیت*</th>
                            <td>
                                <select style="width: 100%;text-align: right" class="form-control select2" id="gender" name="gender">
                                    <option selected disabled>انتخاب کنید</option>
                                    <option>مرد</option>
                                    <option>زن</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>نوع کاربری*</th>
                            <td>
                                <select class="form-control select2" data-placeholder="" onchange="ShowTr();"
                                        style="width: 100%;text-align: right" name="type" id="type">
                                    <option selected disabled>انتخاب کنید</option>
                                    <option value="1">معاون واحد پژوهشی</option>
                                    <option value="2">معاون استان</option>
                                    <option value="3">مدیر ستاد</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="display: none" id="statetr">
                            <th>استان*</th>
                            <td>
                                <select class="form-control select2" data-placeholder="" onchange="cityshow(this.value)"
                                        style="width: 100%;text-align: right" name="state" id="state">
                                    <option selected disabled>انتخاب کنید</option>
                                    <?php
                                    $query=mysqli_query($connection,"select * from state");
                                    foreach ($query as $state):
                                    ?>
                                    <option value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <script>
                            function cityshow(str) {
                                var type=document.getElementById('type').value;
                                if (type==1){
                                    var xmlhttp=new XMLHttpRequest();
                                    xmlhttp.onreadystatechange=function() {
                                        if (this.readyState==4 && this.status==200) {
                                            document.getElementById("city").innerHTML=this.responseText;
                                            document.getElementById("citytr").style.display='';
                                        }
                                    }
                                    xmlhttp.open("GET","build/ajax/showcity.php?state="+str,true);
                                    xmlhttp.send();
                                }
                            }
                        </script>
                        <tr style="display: none" id="citytr">
                            <th>شهرستان*</th>
                            <td>
                                <select class="form-control select2" name="city" id="city" style="width: 250px;text-align: right"> </select>
                            </td>
                        </tr>
                        <tr style="display: none" id="unittr">
                            <th>نام واحد*</th>
                            <td>
                                <input type="text" class="form-control" id="unit"
                                       placeholder="نام واحد را وارد کنید" name="unit">
                            </td>
                        </tr>
                        <tr>
                            <th>آدرس</th>
                            <td>
                                <textarea class="form-control" rows="3" placeholder="آدرس را وارد نمایید" id="address"
                                          name="address"></textarea>
                            </td>
                        </tr>
                    </table>
                </center>

            </div>
            <!-- /.card-body -->
            <center>
                <div class="card-footer">
                    <button name="Add_User" type="submit" class="btn btn-primary">ثبت کاربر جدید</button>
                </div>
            </center>

        </form>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form method="post" id="SearchForm">
                    <h3 class="card-title">نمایش و مدیریت کاربران
                        <select class="form-control select2" data-placeholder=""
                                style="width: 30%;text-align: right" name="Search_Type" id="Search_Type">
                            <option selected disabled>نوع کاربر را انتخاب کنید</option>
                            <option
                            <?php
                            if (@$_POST['Search_Type']=='ستاد'){
                                echo 'selected';
                            }
                            ?>
                            >ستاد</option>
                            <option
                                <?php
                                if (@$_POST['Search_Type']=='استان'){
                                    echo 'selected';
                                }
                                ?>
                            >استان</option>
                        </select>
                        <select class="form-control" data-placeholder=""
                                style="width: 30%;text-align: right;<?php
                                if (@$_POST['Search_state']){
                                    echo 'display: inline-block';
                                }else{
                                    echo 'display: none';
                                }
                                ?>" name="Search_state" id="Search_state">
                            <option selected disabled>استان را انتخاب کنید</option>
                            <?php
                            $query=mysqli_query($connection,"select distinct(state) from users where state is not null and state!='' order by state asc");
                            foreach ($query as $state):
                                ?>
                                <option <?php
                                if (@$_POST['Search_state']==$state['state']){
                                    echo 'selected';
                                }
                                ?> value="<?php echo $state['state']; ?>"><?php
                                    $state=$state['state'];
                                    $query=mysqli_query($connection,"select * from state where id='$state'");
                                    foreach ($query as $stateinfo){}
                                    echo @$stateinfo['name'];
                                    ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn btn-block btn-success" style="display: inline-block" name="Search">جستجو</button>
                    </h3>
                    </form>
                    <?php
                    if (isset($_POST['Search'])):
                    ?>
                    <br>
                    <div class="card-tools-user-manager">
                        <input type="search" name="table_search" class="form-control float-right"
                               placeholder="لطفا برای جستجو، نام و نام خانوادگی مورد نظر را تایپ نمایید"
                               onkeyup="myFunction()" id="myInput">
                    </div>
                    <?php endif; ?>
                </div>
                <?php

                if (@$_POST['Search_Type']=='ستاد'){
                    $SelectUsers = mysqli_query($connection, "select * from users where state is null or state='' order by type desc,family asc");
                }else{
                    $state=@$_POST['Search_state'];
                    $SelectUsers = mysqli_query($connection, "select * from users where state='$state' order by type desc,family asc");
                }

                foreach ($SelectUsers as $Items){}

                if (isset($_POST['Search']) and @$Items!=null):
                ?>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-striped" id="myTable">
                        <tr>
                            <th>ردیف</th>
                            <th>کاربر</th>
                            <th>مشخصات</th>
                            <th>استان</th>
                            <th>شهرستان</th>
                            <th>واحد آموزشی</th>
                            <th>شماره همراه</th>
                            <th>آدرس</th>
                            <th>نوع کاربری</th>
                            <th>عملیات</th>
                        </tr>
                        <?php
                        $a = 1;
                        if (@$_POST['Search_Type']=='ستاد'){
                            $SelectAllUsers = mysqli_query($connection, "select * from users where state is null or state='' order by type desc,family asc");
                        }else{
                            $state=$_POST['Search_state'];
                            $SelectAllUsers = mysqli_query($connection, "select * from users where state='$state' order by type desc,family asc");
                        }
                        foreach ($SelectAllUsers as $users):
                            ?>
                            <tr>
                                <td><?php echo $a;
                                    $a++; ?></td>
                                <td><?php echo $users['username']; ?></td>
                                <td><?php echo $users['name'] . ' ' . $users['family'] ?></td>
                                <td>
                                    <?php
                                    $state=$_POST['Search_state'];
                                    $query=mysqli_query($connection,"select * from state where id='$state'");
                                    foreach ($query as $stateinfo){}
                                    echo @$stateinfo['name'];
                                    ?>
                                </td>
                                <td><?php echo $users['city'] ?></td>
                                <td><?php echo $users['unit'] ?></td>
                                <td><?php echo $users['phone'] ?></td>
                                <td><?php echo $users['address'] ?></td>
                                <td><?php
                                    if ($users['type'] == 1) {
                                        echo 'معاونت پژوهش مدرسه';
                                    } elseif ($users['type'] == 2) {
                                        echo 'معاونت پژوهش استان';
                                    } elseif ($users['type'] == 3) {
                                        echo 'مدیر ستاد';
                                    }
                                    ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.card-body -->
                <?php endif; ?>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->

<script src="build/js/SearchInUserManagerTable.js"></script>
<script src="build/js/UserManagerIncs.js"></script>

<?php endif; include_once __DIR__ . '/footer.php'; ?>
