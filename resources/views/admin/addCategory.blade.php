<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<script>
$(document).ready(function(){
  $("#msg").hide();
  //alert("working");
  $("#btn").click(function(){
    $("#msg").show();

    var cat_name = $("#cat_name").val();

    var token = $("#token").val();

    $.ajax({
      type: "post",
      data: "cat_name=" + cat_name + "&_token=" + token,
      url: "<?php echo url('/admin/saveCategory') ?>",
      success:function(data){
        $("#msg").html("Category has been Created");
        $("#msg").fadeOut(2000);
      }
    });
  });

  var auto_refresh = setInterval(
    function(){
      $('#category').load('<?php echo url('admin/cats');?>').fadeIn("slow");
    },100);
});
</script>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">

                            <div class="content">
                            <h2>Add Category</h2>
                            <p id="msg" class="alert alert-success"></p>

                            <form action="{{route('saveCategory')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                          <input type="hidden"  id="token"/>
                              <label>Category Name</label>
                              <input type="text" id="cat_name" name="cat_name" class="form-control"/>
                            
                              <br>
                              <br>
                              <br>

                                <input type="submit" class="btn btn-success btn-fill" value="Submit" id="btn"/>

                            </form>
                              <div class="footer">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card">

                            <div class="content" id="category">
                         
                                <div class="footer">
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



