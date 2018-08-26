$('#searchBtn').click(function () {
    console.log($('#classLabel').val())
    // url      = window.location.href
    return location.href = window.location.pathname   + '?classId=' + $('#classLabel').val() + '&sessionId=' + $('#sessionLabel').val();
})
$('#classLabel').change(function () {
    return location.href = window.location.pathname   + '?classId=' + $('#classLabel').val();
})
$('#submitBtn').click(function () {

    // while ()
    // console.log($('#atendanceCheckBox').children()[0]);
    // var formData = new FormData();
    var data = [];
    $('.attendanceCheck:checked').each(function (index,item) {
        var obj = {
            studentAttendanceValue : item.value,
            students_studentId : item.name
        }
        data.push(obj);
    })
    // var myJSON = JSON.stringify(data);
    // console.log(myJSON)
    $.ajax({
        method: 'POST',
        url: window.location.pathname ,
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'dataAtendance': JSON.stringify(data),
            'seasionId' : $('#sessionLabel').val()
        },
        // contentType: 'application/json',

        success: function (resp) {
            console.log(resp);

        },
        error: function () {

        }
    })
})