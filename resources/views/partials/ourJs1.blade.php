<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $( document ).ready(function() {
       //  alert('hello!');

       @foreach(App\cats::all() as $catList)
        $("#cat{{$catList->id}}").click(function(){
            var cat=$("#cat{{$catList->id}}").val();
          //  alert(cat);




          $.ajax({
                type:'get',
                dataType:'html',
                url:'{{url('/productsCat')}}',
                data:'cat_id=' +cat,
                success:function(response){

   console.log(response);
  $("#productData").html(response);


}



          });

});
@endforeach
    });
    </script>
