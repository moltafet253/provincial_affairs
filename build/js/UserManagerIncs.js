function ShowTr() {
    var type = document.getElementById('type').value;
    if (type == 1) {
        document.getElementById('statetr').style.display = '';
        document.getElementById('citytr').style.display = '';
        document.getElementById('unittr').style.display = '';
    } else if (type == 2) {
        document.getElementById('statetr').style.display = '';
        document.getElementById('citytr').style.display = 'none';
        document.getElementById('unittr').style.display = 'none';
    } else {
        document.getElementById('statetr').style.display = 'none';
        document.getElementById('citytr').style.display = 'none';
        document.getElementById('unittr').style.display = 'none';
    }
}

document.getElementById("Add_User").onsubmit = function CheckForm() {
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var name = document.getElementById("name");
    var family = document.getElementById("family");
    var gender = document.getElementById("gender");
    var mobile = document.getElementById("mobile");
    var type = document.getElementById("type");
    var state = document.getElementById("state");
    var city = document.getElementById("city");
    var unit = document.getElementById("unit");
    if (username.value == '') {
        alert('فیلد نام کاربری وارد نشده است');
        return false;
    } else if (password.value == '') {
        alert('فیلد رمز عبور وارد نشده است');
        return false;
    } else if (name.value == '') {
        alert('فیلد نام وارد نشده است');
        return false;
    } else if (family.value == '') {
        alert('فیلد نام خانوادگی وارد نشده است');
        return false;
    } else if (gender.value == 'انتخاب کنید') {
        alert('فیلد جنسیت انتخاب نشده است');
        return false;
    } else if (mobile.value == '') {
        alert('فیلد تلفن همراه وارد نشده است');
        return false;
    } else if (type.value == 'انتخاب کنید') {
        alert('فیلد نوع کاربری انتخاب نشده است');
        return false;
    } else if (type.value == 1 && state.value == 'انتخاب کنید') {
        alert('فیلد استان انتخاب نشده است');
        return false;
    } else if (type.value == 1 && city.value == 'انتخاب کنید') {
        alert('فیلد شهرستان انتخاب نشده است');
        return false;
    } else if (type.value == 1 && unit.value == '') {
        alert('فیلد نام واحد وارد نشده است');
        return false;
    } else if (type.value == 2 && state.value == 'انتخاب کنید') {
        alert('فیلد استان انتخاب نشده است');
        return false;
    } else {
        return true;
    }

}