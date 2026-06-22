
// $("button").click(function () {
//    let inputValue = $("input").val();
//    $("h5").text(inputValue);
// });
// $("input").keyup(function () {
//    let inputValue = $(this).val();
//    $("h5").text(inputValue);
// });
// $("button").click(function () {
//     let inputValue = $("input").val( );
//     if (inputValue == "")
//     {
//         $("h5").text("Please enter a value");
//     }
//     else
//     {
//         $("h5").text(inputValue);
//     }
// })

$("form").on( "submit", function (e) {
    e.preventDefault();
    let inputValue = $("input").val();
    if (inputValue == "")
    {
        $("small").text("Please enter a value");
    }
    else
    {
        $("small").text("");
        this.submit();
        alert("Submitted");
    }
})
// $("select").event(function () {});
// $("select").on("event", function () {});