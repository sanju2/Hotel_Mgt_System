<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>




<script>
  $(document).ready(function() {
    function fetch_data(page, sort_type, sort_by, category, price, query) {
      
        $.ajax({
            
            url: "/items/fetch_data?page=" + page + "&sortby=" + sort_by + "&sorttype=" +
                sort_type + "&category=" + category + "&price=" + price + "&query=" + query,
            success: function(data) {
                $('#productData').html('');
                $('#productData').html(data);
            }
        })
    }

    //filtering function

    $('.filtercheck').change(function() {

        var price_id = $('#pid').val();        
        var category_id = $('#cid').val();
        var page = $('#hidden_page').val();
        
        $('#hidden_price_id').val(price_id);
        $('#hidden_category_id').val(category_id);

        console.log(price_id);

        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var query = $('#search').val();
        fetch_data(page, sort_type, column_name, category_id, price_id, query);

    });


    //search function

    $(document).on('keyup', '#search', function() {
        var query = $('#search').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var page = $('#hidden_page').val();
        var price_id = $('#pid').val();        
        var category_id = $('#cid').val();
        
        
        fetch_data(page, sort_type, column_name, category_id, price_id,query);

    })



    //sorting function
    $('.sortcheck').change(function() {

        var price_id = $('#pid').val();        
        var category_id = $('#cid').val();
        var column_name = $('#sortbyid').val();
        var order_type = $('#sortid').val();
        var reverse_order = '';

        if (order_type == 'desc')
        {
            $(this).data('sorting_type', 'desc');
            reverse_order = 'desc';
            //clear_icon();
            $('#' + column_name + '_icon').html('&nbsp;<i class="fas fa-sort-down"></i>');
        }

        if (order_type == 'asc')
        {
            $(this).data('sorting_type', 'asc');
            reverse_order = 'asc';
            //clear_icon();
            $('#' + column_name + '_icon').html('&nbsp;<i class="fas fa-sort-up"></i>');
        }

        $('#hidden_column_name').val(column_name);
        $('#hidden_sort_type').val(reverse_order);

        var page = $('#hidden_page').val();
        var query = $('#search').val();

        fetch_data(page, reverse_order, column_name, category_id, price_id,query);

    });


})
</script>