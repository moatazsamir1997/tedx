// console.log('same Page');
// $(document).ready(function(){
//     $("#parent").click(function(){
//         $("#choice").hide();
//         $("#parentForm").fadeIn(1000);
//     });
// });

// $(document).ready(function(){
//     $("#employee").click(function(){
//         $("#choice").hide();
//         $("#employeeForm").fadeIn(1000);
//     });
// });

$(document).ready(function(){
    $("#backP").click(function(){
        $("#parentForm").fadeOut("fast");
        $("#choice").fadeIn(3000);
    });
});

$(document).ready(function(){
    $("#backE").click(function(){
        $("#employeeForm").fadeOut("fast");
        $("#choice").fadeIn(3000);
    });
});
