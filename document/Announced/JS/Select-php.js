$(document).ready(function(){
    $(".select-distirc").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");
        if(optionValue){
          $(".box").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else{
          $(".box").hide();
        }
      });
    }).change();
  });

  $(document).ready(function(){
    $(".select-village").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");
        if(optionValue){
          $(".village").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else{
          $(".village").hide();
        }
      });
    }).change();
  });

  
  function FetchState(id){
    $('#state').html('');
    $('#home').html('<option>ເລືອກເມືອງກ່ອນ</option>');
    $.ajax({
      type:'post',
      url: 'sql.php',
      data : { distric_id : id},
      success : function(data){
         $('#state').html(data);
      }

    })
  }

  function FetchCity(id){ 
    $('#home').html('');
    $.ajax({
      type:'post',
      url: 'sql.php',
      data : { home : id},
      success : function(data){
         $('#home').html(data);
      }

    })
  }