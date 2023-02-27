<?php include_once __DIR__ . '/header.php';
if ($_SESSION['head']==3):
?>
<!-- Main content -->

<?php
$query = mysqli_query($connection, "Select * from macro_index_options where status=1");
foreach ($query as $macros):
    $macro_id = $macros['id'];
    ?>
    <section class="content" id="<?php echo "section" . $macro_id; ?>">
        <div class="card card-primary collapsed-card">
            <div class="card-header">
                <h4 class="card-title">
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
                            <h4 class="card-title">
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
                                            $a++; ?></td>
                                        <td><?php echo $gauges['subject']; ?></td>
                                        <td><?php echo $gauges['factor']; ?></td>
                                        <td>
                                            <?php
                                            $status = explode("|", $gauges['status']);
                                            $count = count($status);
                                            for ($i = 0; $i < $count; $i++) {
                                                echo @$status[$i];
                                                $i++;
                                                echo ' => ' . @$status[$i] . '<br>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <textarea style="height: 250px"
                                                    onkeyup="ChangeHelpInfo(<?php echo $gauges['id']; ?>,this.value)"><?php echo $gauges['help']; ?></textarea>
                                        </td>
                                        <td>
                                            <select class="form-control select2" data-placeholder=""
                                                    style="width: 100%;text-align: right"
                                                    onchange="ChangeRepetableStatus(<?php echo $gauges['id']; ?>,this.value)">
                                                <option disabled selected>انتخاب کنید</option>
                                                <option <?php if ($gauges['repetable'] == 0) {
                                                    echo 'selected';
                                                } ?> value="0">
                                                    غیر فعال
                                                </option>
                                                <option <?php if ($gauges['repetable'] == 1) {
                                                    echo 'selected';
                                                } ?> value="1">
                                                    فعال
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control select2" data-placeholder=""
                                                    style="width: 100%;text-align: right"
                                                    onchange="ChangeActivationStatus(<?php echo $gauges['id']; ?>,this.value)">
                                                <option disabled selected>انتخاب کنید</option>
                                                <option <?php if ($gauges['active'] == 0) {
                                                    echo 'selected';
                                                } ?> value="0">
                                                    غیر فعال
                                                </option>
                                                <option <?php if ($gauges['active'] == 1) {
                                                    echo 'selected';
                                                } ?> value="1">
                                                    فعال
                                                </option>
                                            </select>
                                        </td>

                                    </tr>
                                <?php
                                endforeach;
                                $a = null;
                                ?>
                                <tr id="1">
                                    <td>جدید</td>
                                    <td>
                                        <input type="text" class="form-control"
                                               id="subject<?php echo $wisdom_id . '_1'; ?>"
                                               placeholder="عنوان سنجه را وارد کنید">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" title="لطفا ضریب سنجه را وارد کنید"
                                               id="factor<?php echo $wisdom_id . '_1'; ?>"
                                               placeholder="لطفا ضریب سنجه را وارد کنید" style="width: 100px">
                                    </td>
                                    <td>
                                        <textarea id="status<?php echo $wisdom_id . '_1'; ?>"
                                                  placeholder="لطفا مقادیر را با | از هم جدا کنید(دقت داشته باشید که به ترتیب زیاد به کم وارد شده و بین مقادیر فاصله نباشد). با این فرمت وارد شود: (نام امتیاز|مقدار ارزش) به عنوان مثال: عالی|5|خیلی خوب|4|خوب|3|ضعیف|2|خیلی ضعیف|1"
                                                  style="height: 250px;width: 200px"></textarea>
                                    </td>
                                    <td>
                                        <textarea id="help<?php echo $wisdom_id . '_1'; ?>"
                                                  style="height: 160px;width: 200px;"></textarea>
                                    </td>
                                    <td>
                                        <select class="form-control select2" data-placeholder=""
                                                style="width: 100%;text-align: right"
                                                id="repetable<?php echo $wisdom_id . '_1'; ?>">
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

                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <center>

                                <button class="btn btn-block btn-dark"
                                        onclick="Add_Gauge_Row(<?php echo $wisdom_id; ?>)">
                                    + ذخیره
                                </button>
                            </center>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <?php endforeach; ?>


                <!-- /.card -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h4 class="card-title">
                            اضافه کردن شاخص خرد
                        </h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="build/php/inc/Add_State_Wisdom_Index_Option.php">
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
            <form method="post" action="build/php/inc/Add_State_Macro_Index_Option.php">
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


    function Add_Gauge_Row(Wisdom_id) {
        var lastChildID = $("#GaugeTable" + Wisdom_id + " tr:last").attr('id');
        lastChildID = parseInt(lastChildID);

        var subject = document.getElementById('subject' + Wisdom_id + "_" + lastChildID).value;
        var factor = document.getElementById('factor' + Wisdom_id + "_" + lastChildID).value;
        var status = document.getElementById('status' + Wisdom_id + "_" + lastChildID).value;
        var help = document.getElementById('help' + Wisdom_id + "_" + lastChildID).value;
        var repetable = document.getElementById('repetable' + Wisdom_id + "_" + lastChildID).value;

        if (subject != '' && factor != '' && status != '' && help != '' && repetable != '') {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                }
            }
            xmlhttp.open("GET", "build/ajax/New_Gauge.php?Wisdom_id=" + Wisdom_id + "&subject=" + subject + "&factor=" + factor + "&status=" + status + "&help=" + help + "&repetable=" + repetable, true);
            xmlhttp.send();
            lastChildID++;
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
            cell2.innerHTML = "<input type='text' class='form-control' id=subject" + Wisdom_id + "_" + lastChildID + " placeholder='عنوان سنجه را وارد کنید'>";
            cell3.innerHTML = "<input type='number' class='form-control' id=factor" + Wisdom_id + "_" + lastChildID + " placeholder='لطفا ضریب سنجه را وارد کنید' title='لطفا ضریب سنجه را وارد کنید' style='width: 100px'>";
            cell4.innerHTML = "<textarea id=status" + Wisdom_id + "_" + lastChildID + " placeholder='لطفا مقادیر را با | از هم جدا کنید(دقت داشته باشید که به ترتیب زیاد به کم وارد شده و بین مقادیر فاصله نباشد). با این فرمت وارد شود: (نام امتیاز|مقدار ارزش) به عنوان مثال: عالی|5|خیلی خوب|4|خوب|3|ضعیف|2|خیلی ضعیف|1' style='height: 250px;width: 200px'></textarea>";
            cell5.innerHTML = "<textarea id=help" + Wisdom_id + "_" + lastChildID + " style='height: 160px;width: 200px;'></textarea>";
            cell6.innerHTML = "<select class='form-control select2' style='width: 100%;text-align: right' id=repetable" + Wisdom_id + "_" + lastChildID + "> <option disabled selected>انتخاب کنید</option> <option value='0'>غیر فعال </option><option value='1'>فعال</option></select>";
            row.appendChild(cell1);
            row.appendChild(cell2);
            row.appendChild(cell3);
            row.appendChild(cell4);
            row.appendChild(cell5);
            row.appendChild(cell6);
            row.appendChild(cell7);
            row.id = lastChildID;
            tableRow.appendChild(row);
        } else {
            alert('لطفا مقادیر ورودی را چک کنید');
        }


    }

    function ChangeActivationStatus(Gauge_id, status) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
            }
        }
        xmlhttp.open("GET", "build/ajax/Change_Gauge_Activation_Status.php?Gauge_id=" + Gauge_id + "&Value=" + status, true);
        xmlhttp.send();
    }

    function ChangeRepetableStatus(Gauge_id, status) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
            }
        }
        xmlhttp.open("GET", "build/ajax/Change_Gauge_Repetable_Status.php?Gauge_id=" + Gauge_id + "&Value=" + status, true);
        xmlhttp.send();
    }

    function ChangeHelpInfo(Gauge_id, Help) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
            }
        }
        xmlhttp.open("GET", "build/ajax/Change_Help_Info.php?Gauge_id=" + Gauge_id + "&Value=" + Help, true);
        xmlhttp.send();
    }
</script>
<?php
endif;
include_once __DIR__ . '/footer.php'; ?>
