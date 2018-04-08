<div class="featured">
    <div class="panel">
        <?php 
            $product_info = (object) [
                'title' => 'Here we go',
                'image' => 'https://images.unsplash.com/photo-1496072298559-ee7eacbd1b39?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f7187f42114410b39d3fb69541267b13&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb',
                'price' => '€0.99'
            ];
        ?>
        <div class="panel-image" style = "background:url('<?php echo $product_info->image; ?>')">
        </div>
        <div class="panel-info">
            <?php echo $product_info->title; ?>
            <?php echo $product_info->price; ?>
        </div>
    </div>
</div>