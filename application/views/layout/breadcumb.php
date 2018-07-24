    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"><?=$var_judul; ?></h1>
            <ul class="pull-right breadcrumb"><?php
            foreach($var_breadcumb as $bc){ ?>
                <li><a href="#"><?=$bc; ?></a></li><?php
            } ?>
        </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->