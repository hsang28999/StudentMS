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
    var section2 = arr[4];
    var section3 = arr[5];
    var content ="";
    console.log(section2);
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


var $ddmmyyyy = $('.ddmmyyyy');
//Date
$ddmmyyyy.find('.date').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });

var $yyyymmdd = $('.yyyymmdd');
//Date
$yyyymmdd.find('.date').inputmask('yyyy/mm/dd', { placeholder: '____/__/__' });

function convertStringToDate(string) {
    var from = string.split("/");
    var stringDate = from[1] + "/" + from[0] + "/" + from[2];
    var date = new Date(stringDate);
    return date;
}

function convertToYYYYMMDD(day) {
    var from = day.split("/");
    var stringDate = from[2] + "/" + from[1] + "/" + from[0];
    return stringDate;
}

function getDaysFromTimeInput(startAt, endAt) {
    var days=[];
    for (var d = startAt; d <= endAt; d.setDate(d.getDate() + 1)) {
        var day = new Date(d);
        days.push(day);
    }
    return days;
}

function convertDateToString(day){
    var date = day.getDate();
    var month = day.getMonth()+1;
    var year = day.getFullYear();
    if (month <= 9){
        month = "0" + month;
    }
    if (date <= 9){
        date = "0" + date;
    }
    var dayString = date + "/" +  month + "/" + year;
    return dayString;
}
function getSubjects() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var data=[];
    var content = "";
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        type:"GET",
        async: false,
        url: "/timeTable/getSubjects",
        success: function(response){
            data=response;
            for (var i=0;i<data.length;i++) {
                content += '<option value="'+data[i].subjectId+'">'+data[i].subjectName+' - ' + data[i].teacherName +'</option>';
            };

        }
    });
    return content;
};
function generateSubjectTable(count,day){

    var rows ='';
    for (var i=1;i<=count;i++){
        rows += '                                   <li class="list-group-item section-table">\n' +
            '                                            <span class="badge float-left margin-bot-5">Session <span class="section-index">'+i+'</span></span>\n' +
            '                                            <select class="select-beast subject-selected" placeholder="Select a subject...">\n' +
            '                                                <option value="">Select a subject...</option>\n' +
                                                                getSubjects()+
            '                                            </select>\n' +
            '                                        </li>\n';
    }
    var content =  '<div class="col-md-3">\n' +
        '                                    <ul class="list-group time-table">\n' +
        '                                        <li class="list-group-item list-group-bg-cyan text-center dayValue">'+day+'</li>\n'
                                                +rows+
        '                                    </ul>\n' +
        '                                </div>';
    return content;
}

$('#ok').click(function () {
    var startAt = convertStringToDate($('#startAt').val());
    var endAt = convertStringToDate($('#endAt').val());
    var days = getDaysFromTimeInput(startAt, endAt);
    var monday ="",tuesday="",wednesday="",thursday="",friday="",saturday="",sunday="";

    for(var i=0;i<days.length;i++) {
        var buttonDisable = '<div><button type="button" value="0" class="btn btn-default waves-effect" disabled="disabled">X</button></div> \n';
        if (days[0].getDay() != 0 && i==0){
            monday+=buttonDisable;
            if (days[0].getDay() != 1 ){
                tuesday+=buttonDisable;
                if (days[0].getDay() != 2){
                    wednesday+=buttonDisable;
                    if (days[0].getDay() != 3){
                        thursday+=buttonDisable;
                        if (days[0].getDay() != 4){
                            friday+=buttonDisable;
                        }
                    }
                }
            }
        }

        var dayString = convertDateToString(days[i]);
        var button = '<div><button type="button" value="0" class="btn btn-default waves-effect date-button">'+dayString+'</button></div> \n';
        switch(days[i].getDay()) {
            case 0:
                monday += button;
                break;
            case 1:
                tuesday += button;
                break;
            case 2:
                wednesday += button;
                break;
            case 3:
                thursday += button;
                break;
            case 4:
                friday += button;
                break;
            case 5:
                saturday += button;
                break;
            case 6:
                sunday += button;
                break;
            default:
                break;
        }
    };
    var content ='                              <div class="row">\n' +
        '                                             <h2 class="text-center">Select day</h2>'+
        '                                            <div class="col-sm-2">\n' +
        '                                                <div class="margin-bot-10">' +
        '                                                     <input type="checkbox" id="md_checkbox_monday" class="filled-in checkAll chk-col-cyan" >' +
        '                                                     <label for="md_checkbox_monday">Monday</label> ' +
        '                                                </div>\n' + monday +
        '                                            </div>\n' +
        '                                            <div class="col-sm-2">\n' +
        '                                                <div class="margin-bot-10">' +
        '                                                     <input type="checkbox" id="md_checkbox_tuesday" class="filled-in checkAll chk-col-cyan" >' +
        '                                                     <label for="md_checkbox_tuesday">Tuesday</label> ' +
        '                                                </div>\n' + tuesday +
        '                                            </div>\n' +
        '                                            <div class="col-sm-2">\n' +
        '                                                <div class="margin-bot-10">' +
        '                                                     <input type="checkbox" id="md_checkbox_wednesday" class="filled-in checkAll chk-col-cyan" >' +
        '                                                     <label for="md_checkbox_wednesday">Wednesday</label> ' +
        '                                                </div>\n' + wednesday +
        '                                            </div>\n' +
        '                                            <div class="col-sm-2">\n' +
        '                                                <div class="margin-bot-10">' +
        '                                                     <input type="checkbox" id="md_checkbox_thursday" class="filled-in checkAll chk-col-cyan" >' +
        '                                                     <label for="md_checkbox_thursday">Thursday</label> ' +
        '                                                </div>\n' + thursday +
        '                                            </div>\n' +
        '                                            <div class="col-sm-2">\n' +
        '                                                <div class="margin-bot-10">' +
        '                                                     <input type="checkbox" id="md_checkbox_friday" class="filled-in checkAll chk-col-cyan" >' +
        '                                                     <label for="md_checkbox_friday">Friday</label> ' +
        '                                                </div>\n' + friday +
        '                                            </div>\n' +
        '                                            <div class="col-sm-2">\n' +
        '                                                <div class="margin-bot-10">' +
        '                                                     <input type="checkbox" id="md_checkbox_saturday" class="filled-in checkAll chk-col-cyan" >' +
        '                                                     <label for="md_checkbox_saturday">Saturday</label> ' +
        '                                                </div>\n' + saturday +
        '                                            </div>\n' +
        '                                        <div class="col-sm-7 col-sm-offset-5"><button class="btn btn-success waves-effect" id="submitSelectDay">Continue</button></div>'
    '                                        </div>';
    $('#list-date-button').html(content);
});

$('#list-date-button').on('click','.date-button',function () {
    if ($(this).hasClass('btn-default') || $(this).attr('value')== 0){
        $(this).removeClass('btn-default');
        $(this).addClass('bg-cyan');
        $(this).attr('value',1);
    }else if ($(this).hasClass('bg-cyan') || $(this).attr('value')== 1){
        $(this).removeClass('bg-cyan');
        $(this).addClass('btn-default');
        $(this).attr('value',0);
    }
});
$('#list-date-button').on('click','.checkAll',function () {
    var date_button = $(this).parent().parent();
    $(this).toggleClass('checked');
    if ($(this).hasClass('checked')){
        for (var i=0;i<date_button.find('.date-button').length;i++){
            var date = date_button.find('.date-button:eq('+i+')');
            if (date.attr('value')==0){
                date.removeClass('btn-default');
                date.addClass('bg-cyan');
                date.attr('value',1);
            }
        }
    }else {
        for (var i=0;i<date_button.find('.date-button').length;i++){
            var date = date_button.find('.date-button:eq('+i+')');
            if (date.attr('value')==1){
                date.removeClass('bg-cyan');
                date.addClass('btn-default');
                date.attr('value',0);
            }
        }
    }
});
$('#list-date-button').on('click','#submitSelectDay',function () {
    var mainSection = '';
    var sections = '';
    var date_button = $('#list-date-button');
    for (var i=0;i<date_button.find('.date-button').length;i++){
        var date = date_button.find('.date-button:eq('+i+')');
        var count = $('#countSession').val();
        if (date.attr('value')==1){
            sections += generateSubjectTable(count,date.text());
        }
    }
    mainSection = '<div class="row">'+ sections+
        '<div class="col-sm-7 col-sm-offset-5"><button class="btn btn-success waves-effect" id="submitTimetable">Submit</button></div>'+
        '</div>';
    $('#list-date-button2').html(mainSection);
    $('.select-beast').selectize({
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        dropdownParent: 'body'
    });
});
$('#list-date-button2').on('click','#submitTimetable',function () {
    var time_table = $('#list-date-button2');
    var daysHasSubject = [];
    var classSelected = $('#class-selected').val();
        for (var i=0;i<time_table.find('.time-table').length;i++){
            var section = [];
            var table = time_table.find('.time-table:eq('+i+')');
            var dayValue = table.find('.dayValue:eq(0)').text();
            for (var j=0;j<table.find('.section-table').length;j++) {
                var aSection = table.find('.section-table:eq('+j+')');
                var index = aSection.find('.section-index:eq(0)').text();
                var subjectId = aSection.find('.subject-selected:eq(0)').val();
                var subject = {
                    "index":index,
                    "subjectId":subjectId
                };
                section.push(subject);
            }
            var day = {
                "dayValue":convertToYYYYMMDD(dayValue),
                "sessions":section
            };
            daysHasSubject.push(day) ;
        }

    var list_time_table={
        "class":classSelected,
        "timeTable": daysHasSubject
    }
    submitTimeTableToApi(JSON.stringify(list_time_table));
});

function submitTimeTableToApi(timeTable) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var time_table = JSON.stringify(timeTable);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        type:"POST",
        url: "/timeTable",
        data: {timeTable : time_table},
        dataType: 'json',
        success: function(data){
            console.log(data);
        }
    });
}
