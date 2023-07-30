<section class="headline">
    <div class="container container-1">
        <img class="preview-img" src="/img/<?php echo $the_latest_news['image']?>" alt="#">
        <div class="content">
            <h1 class="title"><?=$the_latest_news['title']?></h1>
            <p><?=$the_latest_news['announce']?></p>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="news-content">
            <h1 class="news-title">Новости</h1>
            <div class="news-box">
                <?php foreach ($list_of_news_for_curr_page as $curr_news){
                        $curr_date_timestamp = strtotime($curr_news['date']);
                        $new_date = date('d.m.Y', $curr_date_timestamp);
                ?>
                    <div class="new-item">
                        <p class="date"><?php echo $new_date?></p>
                        <h2 class="new-title"><?php echo $curr_news['title']?></h2>
                        <?php echo $curr_news['announce']?>
                        <a href="/id/<?php echo $curr_news['id']?>" class="new-btn">Подробнее
                            <img src="/images/arrow1__.svg" alt="" class="arrow1-img">
                        </a>
                    </div>

                <?php }?>                 
            </div>
        </div>
    </div>
</section>
<section class="pagination">
    <div class="container">
        <div class="pagination-content">
            <ul class="pagination-list">
                <li <?php echo ($curr_page==1) ? "class=\"active\"": null?> ><a href="/page/1">1</a></li>
                <?php   if($curr_page<4){ ?>
                    <li <?php echo ($curr_page==2) ? "class=\"active\"": null?>><a href="/page/2">2</a></li>
                    <li <?php echo ($curr_page==3) ? "class=\"active\"": null?>><a href="/page/3">3</a></li>
                <?php   }
                        else{
                ?>
                        <li><a href="#">...</a></li>
                        <li class="active"><a href="/page/<?php echo $curr_page ?>"><?php echo $curr_page ?></a></li>
                <?php   }?>

                <?php 
                        if($curr_page!=$number_of_pages){
                            if($curr_page!=$number_of_pages-1){?>
                                <li><a href="#">...</a></li>
                <?php       }   
                ?>
                <li><a href="/page/<?php echo $number_of_pages?>"><?php echo $number_of_pages ?></a></li>
                <li class="li-arrow">
                    <a href="/page/<?php echo $curr_page+1?>" class="new-btn-next">
                        <img src="/images/arrow1__.svg" alt="" class="arrow1-img">
                    </a>
                </li>
                <?php   }   
                ?>
                
            </ul>

            
        </div>
        
    </div>
</section>