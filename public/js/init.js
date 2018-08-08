var mapBC = {};
mapBC["view"] = '<i class="material-icons">remove_red_eye</i> View';
mapBC["teacher"] = '<i class="fas fa-briefcase"></i> Teacher';
mapBC["student"] = '<i class="fas fa-user-graduate"></i> Student';
mapBC["academic"] = '<i class="fas fa-school"></i> Academic';
mapBC["academic_class"] = '<i class="fas fa-sitemap"></i> Class';
mapBC["academic_subject"] = '<i class="fas fa-stream"></i> Subject';
mapBC["attendance"] = '<i class="fas fa-clipboard" ></i> Attendance';
mapBC["attendance_student"] = '<i class="fas fa-users"></i> Attendance Student';
mapBC["attendance_teacher"] = '<i class="fas fa-user-tie" ></i> Attendance Teacher';
mapBC["mark"] = '<i class="fas fa-clipboard-check"></i> Mark';
mapBC["add"] = '<i class="material-icons">assignment</i> Add';
mapBC["edit"] = '<i class="material-icons">edit</i> Edit';
function generateBreadcrumb(section) {
    return '<li>\n' +
        '       <a href="javascript:void(0);">\n' +
        mapBC[section] +
        '       </a>\n' +
        '   </li>'
}

function generateBreadcrumbs() {
    var URL=window.location.href;
    var arr=URL.split('/');
    var section1 = arr[3];
    var section2 =section1 + "_" + arr[4];
    var section3 = arr[5];
    var content ="";
    if (section1 != undefined){
        content += generateBreadcrumb(section1);
        if (section2 != undefined){
            content += generateBreadcrumb(section2);
            if (section3 != undefined){
                content += generateBreadcrumb(section3);
            }
        }
    }
    $(".breadcrumb.pull-right.m-t--15").html(content);

}
generateBreadcrumbs();