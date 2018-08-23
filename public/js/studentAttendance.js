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
    console.log($('#atendanceCheckBox').children()[0]);
    var formData = new FormData();
    $('.attendanceCheck:checked').each(function (index,item) {
        var obj = {
            studentAttendanceValue : item.value,
            students_studentId : item.name
        }
        data.push(obj);
    })
    console.log(data)
    $.ajax({
        method: 'POST',
        url: window.location.pathname ,
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'dataAtendance': data
        },
        success: function (resp) {
            alert('Success')

        },
        error: function () {

        }
    })
})