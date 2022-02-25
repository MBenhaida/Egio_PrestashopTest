function linkedInputsWidth() {
    $("#input3").val($("#input2").val());
}

function linkedInputsHeight() {
    $("#input2").val($("#input3").val());
}

$("#input2").on("paste", function () {
    setTimeout(function () {
        $("#input3").val($("#input2").val());
    }, 0);
});

$("#input3").on("paste", function () {
    setTimeout(function () {
        $("#input2").val($("#input3").val());
    }, 0);
});
