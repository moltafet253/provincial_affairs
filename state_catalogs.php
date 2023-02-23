<?php include_once __DIR__ . '/header.php'; ?>
<!-- Main content -->

<?php
$query = mysqli_query($connection, "Select * from macro_index_options where status=1");
foreach ($query as $macros):
    $macro_id = $macros['id'];
    ?>
    <section class="content" id="<?php echo "section" . $macro_id; ?>">
        <div class="card card-primary collapsed-card">
            <div class="card-header">
                <h4 class="card-title" style="font-size: 16px">
                    <?php echo $macros['subject']; ?>
                </h4>
                <div class="card-tools">
                    <button onclick="ChangeMacroTabToolsIcon(<?php echo $macro_id; ?>)" type="button"
                            class="btn btn-tool" data-widget="collapse"><i id="MacroIconID<?php echo $macro_id; ?>"
                                                                           class="fa fa-plus-square"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php
                $query = mysqli_query($connection, "select * from wisdom_index_options where parent_id='$macro_id'");
                foreach ($query as $wisdoms):
                    $wisdom_id = $wisdoms['id'];
                    ?>
                    <div class="card card-success collapsed-card">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size: 16px">
                                <?php echo $wisdoms['subject']; ?>
                            </h4>
                            <div class="card-tools">
                                <button onclick="ChangeWisdomTabToolsIcon(<?php echo $wisdom_id; ?>)" type="button"
                                        class="btn btn-tool" data-widget="collapse"><i
                                            id="WisdomIconID<?php echo $wisdom_id; ?>" class="fa fa-plus-square"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="GaugeTable<?php echo $wisdom_id; ?>"
                                   style="overflow-x: auto">
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام سنجه</th>
                                    <th>ضریب موضوع</th>
                                    <th>امتیاز و مقدار ارزش</th>
                                    <th>راهنما</th>
                                    <th>قابل تکرار</th>
                                    <th>وضعیت</th>
                                </tr>
                                <?php
                                $a = 1;
                                $query = mysqli_query($connection, "select * from gauge_options where parent_id='$wisdom_id'");
                                foreach ($query as $gauges):
                                    ?>
                                    <tr>
                                        <td><?php echo $a;
                                            $a; ?></td>
                                        <td><?php echo $gauges['subject']; ?></td>
                                        <td><?php echo $gauges['factor']; ?></td>
                                        <td>
                                            <?php
                                            $status = explode("|", $gauges['status']);
                                            $count = count($status);
                                            for ($i = 0; $i < $count; $i++) {
                                                echo $status[$i] . $i++ . ' => ' . $status[$i] . '<br>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <textarea disabled><?php echo $gauges['help']; ?></textarea>
                                        </td>
                                        <td>
                                            <?php if ($gauges['repetable'] == 0) {
                                                echo 'غیر فعال';
                                            } elseif ($gauges['repetable'] == 1) {
                                                echo 'فعال';
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if ($gauges['active'] == 0) {
                                                echo 'غیر فعال';
                                            } elseif ($gauges['active'] == 1) {
                                                echo 'فعال';
                                            } ?>
                                        </td>

                                    </tr>
                                <?php
                                endforeach;
                                $a=null;
                                ?>
                                <tr>
                                    <td>جدید</td>
                                    <td>
                                        <input type="text" class="form-control"
                                               id="subject<?php echo $wisdom_id ;
                                               if (isset($a)){echo $a+1;}else{echo 1;}  ?>"
                                               placeholder="عنوان سنجه را وارد کنید">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control"
                                               id="factor<?php echo $wisdom_id ;
                                               if (isset($a)){echo $a+1;}else{echo 1;} ?>"
                                               placeholder="لطفا ضریب سنجه را وارد کنید">
                                    </td>
                                    <td>
                                        <textarea id="status<?php echo $wisdom_id ;
                                        if (isset($a)){echo $a+1;}else{echo 1;} ?>"
                                                  placeholder="لطفا مقادیر را با | از هم جدا کنید(دقت داشته باشید که به ترتیب زیاد به کم وارد شده و بین مقادیر فاصله نباشد). با این فرمت وارد شود: (نام امتیاز|مقدار ارزش) به عنوان مثال: عالی|5|خیلی خوب|4|خوب|3|ضعیف|2|خیلی ضعیف|1"
                                                  style="height: 250px;width: 200px"></textarea>
                                    </td>
                                    <td>
                                        <textarea id="help<?php echo $wisdom_id ;
                                        if (isset($a)){echo $a+1;}else{echo 1;} ?>"
                                                  style="height: 160px;width: 200px;"></textarea>
                                    </td>
                                    <td>
                                        <select class="form-control select2" data-placeholder=""
                                                style="width: 100%;text-align: right"
                                                id="repetable<?php echo $wisdom_id ;
                                                if (isset($a)){echo $a+1;}else{echo 1;} ?>">
                                            <option disabled selected>انتخاب کنید</option>
                                            <option value="0">
                                                غیر فعال
                                            </option>
                                            <option value="1">
                                                فعال
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control select2" data-placeholder=""
                                                style="width: 100%;text-align: right"
                                                id="active<?php echo $wisdom_id ;
                                                if (isset($a)){echo $a+1;}else{echo 1;} ?>">
                                            <option disabled selected>انتخاب کنید</option>
                                            <option value="0">
                                                غیر فعال
                                            </option>
                                            <option value="1">
                                                فعال
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <center>

                                <button class="btn btn-block btn-dark"
                                        onclick="Add_Gauge_Row(<?php echo $wisdom_id; ?>)">
                                    + ذخیره و اضافه کردن
                                </button>
                            </center>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <?php endforeach; ?>


                <!-- /.card -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h4 class="card-title" style="font-size: 16px">
                            اضافه کردن شاخص خرد
                        </h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="build/php/inc/Add_Wisdom_Index_Option.php">
                            <table class="table table-bordered table-striped" id="myTable">
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام شاخص</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                <tr>
                                    <td>*</td>
                                    <td>
                                        <input type="text" class="form-control" id="wisdom_subject"
                                               placeholder="عنوان شاخص خرد را وارد کنید" name="wisdom_subject">
                                    </td>
                                    <td>
                                        <select class="form-control select2" data-placeholder=""
                                                style="width: 100%;text-align: right" name="active" id="active">
                                            <option disabled selected>انتخاب کنید</option>
                                            <option value="0">
                                                غیر فعال
                                            </option>
                                            <option selected value="1">
                                                فعال
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="hidden" name="section_id"
                                               value="<?php echo "section" . $macro_id; ?>">
                                        <input type="hidden" name="macro_id" value="<?php echo $macro_id; ?>">
                                        <input type="submit" value="اضافه کردن شاخص خرد"
                                               class="btn btn-block btn-success" name="add_wisdom">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.card -->
    </section>
<?php
endforeach;
?>
<section class="content">
    <div class="card card-warning">
        <div class="card-header">
            <h4 class="card-title" style="font-size: 16px">
                اضافه کردن شاخص کلان
            </h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" action="build/php/inc/Add_Macro_Index_Option.php">
                <table class="table table-bordered table-striped" id="myTable">
                    <tr>
                        <th>ردیف</th>
                        <th>نام شاخص</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>
                            <input type="text" class="form-control" id="macro_subject"
                                   placeholder="عنوان شاخص کلان را وارد کنید" name="macro_subject">
                        </td>
                        <td>
                            <select class="form-control select2" data-placeholder=""
                                    style="width: 100%;text-align: right" name="active" id="active">
                                <option disabled selected>انتخاب کنید</option>
                                <option value="0">
                                    غیر فعال
                                </option>
                                <option selected value="1">
                                    فعال
                                </option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" value="اضافه کردن شاخص کلان" class="btn btn-block btn-success"
                                   name="add_macro">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<script>


    function ChangeMacroTabToolsIcon(MacroID) {
        if (document.getElementById('MacroIconID' + MacroID).className == "fa fa-minus-square") {
            document.getElementById('MacroIconID' + MacroID).className = "fa fa-plus-square";
        } else {
            document.getElementById('MacroIconID' + MacroID).className = "fa fa-minus-square";
        }

    }

    function ChangeWisdomTabToolsIcon(WisdomID) {
        if (document.getElementById('WisdomIconID' + WisdomID).className == "fa fa-minus-square") {
            document.getElementById('WisdomIconID' + WisdomID).className = "fa fa-plus-square";
        } else {
            document.getElementById('WisdomIconID' + WisdomID).className = "fa fa-minus-square";
        }

    }
</script>
<script>

    function Add_Gauge_Row(Wisdom_id) {
        var Rows_Lenght = document.getElementById("GaugeTable" + Wisdom_id).rows.length;
        var lastChildID = Rows_Lenght;

        var tableRow = document.getElementById("GaugeTable" + Wisdom_id);
        var row = tableRow.insertRow(-1);
        var cell1 = document.createElement("td");
        var cell2 = document.createElement("td");
        var cell3 = document.createElement("td");
        var cell4 = document.createElement("td");
        var cell5 = document.createElement("td");
        var cell6 = document.createElement("td");
        var cell7 = document.createElement("td");
        cell1.innerHTML = "جدید";
        cell2.innerHTML = "<input type='text' class='form-control' id=subject" + Wisdom_id + lastChildID + " placeholder='عنوان سنجه را وارد کنید'>";
        cell3.innerHTML = "<input type='number' class='form-control' id=factor" + Wisdom_id + lastChildID + " placeholder='لطفا ضریب سنجه را وارد کنید'>";
        cell4.innerHTML = "<textarea id=status" + Wisdom_id + lastChildID + " placeholder='لطفا مقادیر را با | از هم جدا کنید(دقت داشته باشید که به ترتیب زیاد به کم وارد شده و بین مقادیر فاصله نباشد). با این فرمت وارد شود: (نام امتیاز|مقدار ارزش) به عنوان مثال: عالی|5|خیلی خوب|4|خوب|3|ضعیف|2|خیلی ضعیف|1' style='height: 250px;width: 200px'></textarea>";
        cell5.innerHTML = "<textarea id=help" + Wisdom_id + lastChildID + " style='height: 160px;width: 200px;'></textarea>";
        cell6.innerHTML = "<select class='form-control select2' style='width: 100%;text-align: right' id=repetable" + Wisdom_id + lastChildID + "> <option disabled selected>انتخاب کنید</option> <option value='0'>غیر فعال </option><option value='1'>فعال</option></select>";
        cell7.innerHTML = "<select class='form-control select2' style='width: 100%;text-align: right' id=active"+ Wisdom_id+ lastChildID + "> <option disabled selected>انتخاب کنید</option> <option value='0'>غیر فعال </option><option value='1'>فعال</option></select>";
        row.appendChild(cell1);
        row.appendChild(cell2);
        row.appendChild(cell3);
        row.appendChild(cell4);
        row.appendChild(cell5);
        row.appendChild(cell6);
        row.appendChild(cell7);
        tableRow.appendChild(row);

        var pre=lastChildID-1;
        // alert (Rows_Lenght);
        // alert (lastChildID);
        var subject = document.getElementById('subject' + Wisdom_id + pre).value;
        var factor = document.getElementById('factor' + Wisdom_id + pre).value;
        var status = document.getElementById('status' + Wisdom_id + pre).value;
        var help = document.getElementById('help' + Wisdom_id + pre).value;
        var repetable = document.getElementById('repetable' + Wisdom_id + pre).value;
        var active = document.getElementById('active' + Wisdom_id + pre).value;

        // var xmlhttp = new XMLHttpRequest();
        // xmlhttp.onreadystatechange = function () {
        //     if (this.readyState == 4 && this.status == 200) {
        //     }
        // }
        // xmlhttp.open("GET", "build/ajax/New_Gauge.php?Wisdom_id=" + Wisdom_id + "&subject=" + subject + "&factor=" + factor + "&status=" + status + "&help=" + help + "&repetable=" + repetable + "&active=" + active, true);
        // xmlhttp.send();
    }

</script>
<?php include_once __DIR__ . '/footer.php'; ?>
