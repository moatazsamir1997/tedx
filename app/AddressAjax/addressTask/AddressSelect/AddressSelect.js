$("#type").val('item0');
$(document).ready(function () {
 
  $("#type").change(function () {
  
      var val = $(this).val();
    
      $.ajax({
        type: 'POST',
        url: 'OtherAddresses.php',
        data: {func:
      'AnotherAddress',
    //   func2:
    //   'AnotherAddress2',
      'AddressValue': val
  },
  
        success: function(data) {
        
            var $response=$(data);
            citySelection($response,val);
            // RegionSelection($response,val);
        },
        
        error: function()
        {
          alert("error");
        } 
  });
                  
      });
  
});
// $(document).load(function () {
$("#city").change(function () {
    alert("here");
    var val = $(this).val();
    $.ajax({
      type: 'POST',
      url: 'OtherAddresses.php',
      data: {func:
    'AnotherAddress2',
  //   func2:
  //   'AnotherAddress2',
    'AddressValue': val
},

      success: function(data) {
        alert("error");
          var $response=$(data);
        //   citySelection($response,val);
          RegionSelection($response,val);
      },
      
      error: function()
      {
        alert("error");
      } 
});
});
                
    // });
function citySelection($response,val) 
{
   
    if (val == "item1") {
        // $("#size").append(data);
        var city = $response.filter('#city');
         $("#AnotherOne").html(city);
         
    } else if (val == "item2") {
        // $("#size").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
        $("#AnotherOne").html('<select id="size"><option value="">-- select a city -- </option></select>');
      } else if (val == "item3") {
        //$("#size").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
    } else if (val == "item0") {
        // $("#size").html("<option value=''>--select one--</option>");
    }
}
function RegionSelection($response,val) 
{
  
    if (val == "1") {
        // $("#size").append(data);
        var city = $response.filter('#city');
         $("#AnotherOne").html(city);
         
    } else if (val == "2") {
        // $("#size").html("<option value='test'> 2: test 1</option><option value='test2'> 2: test 2</option>");
        $("#AnotherOne").html('<select id="size"><option value="">-- select a Region -- </option></select>');
      } else if (val == "3") {
        //$("#size").html("<option value='test'> 3: test 1</option><option value='test2'> 3: test 2</option>");
    } else if (val == "0") {
        // $("#size").html("<option value=''>--select one--</option>");
    }
}