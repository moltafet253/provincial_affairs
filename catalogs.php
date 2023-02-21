<?php include_once __DIR__ . '/header.php'; ?>
<!-- Main content -->
<section class="content">

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">کاتالوگ ها</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr style="text-align: center">
                    <th style="width: 10px">ردیف</th>
                    <th>نام کاتالوگ</th>
                    <th>مقادیر تعریف شده کاتالوگ</th>
                    <th>عملیات</th>
                </tr>
                <tr style="text-align: center">
                    <td>1.</td>
                    <td style=";vertical-align: middle">عناوین بخش ویژه</td>
                    <td>
                        <select multiple class="form-control select2" style="width: 100%;">
                            <?php
                            $query = mysqli_query($connection_maghalat, "select * from special_type order by subject asc");
                            foreach ($query as $specials):
                                ?>
                                <option <?php if ($specials['active']==0) echo "disabled style='background-color: #ffc107'" ?>>
                                    <?php echo $specials['subject']; if ($specials['active']==0) echo ' (غیرفعال)' ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <form action="build/php/inc/Add_Special_Type.php" method="post">
                            <input name="Special_Type" type="text" class="form-control" id=""
                                   placeholder="لطفا قبل از ورود اطلاعات، چک نمایید که قبلا وارد نشده باشد">
                            <br/>
                            <center>
                                <button type="submit" class="btn btn-primary"
                                        onclick="return confirm ('آیا از مقدار وارد شده مطمئن هستید؟ پس از ثبت، فقط میتوانید مقدار مورد نظر را غیرفعال نمایید')">
                                    ثبت بخش ویژه
                                </button>
                            </center>
                        </form>
                        <br/>
                        <form action="build/php/inc/Disable_Special_Type.php" method="post">
                            <select name="Special_Type" class="form-control select2" style="width: 100%;">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from special_type where active=1 order by subject asc");
                                foreach ($query as $specials):
                                    ?>
                                    <option>
                                        <?php echo $specials['subject'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br/>
                            <center>
                                <button type="submit" class="btn btn-danger">غیرفعالسازی بخش ویژه</button>
                            </center>
                        </form>
                        <br/>
                        <form action="build/php/inc/Enable_Special_Type.php" method="post">
                            <select name="Special_Type" class="form-control select2" style="width: 100%;">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from special_type where active=0 order by subject asc");
                                foreach ($query as $specials):
                                    ?>
                                    <option>
                                        <?php echo $specials['subject'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br/>
                            <center>
                                <button type="submit" class="btn btn-success">فعالسازی بخش ویژه</button>
                            </center>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->


<?php include_once __DIR__ . '/footer.php'; ?>
