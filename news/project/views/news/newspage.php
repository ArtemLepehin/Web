<section class="news">
    <div class="container">
        <div class="content">
            <P>
                <a href="/">Главная</a> / <a href="#" class="detail"><?=$curr_news['title']?></a>
            </P>
            <h1 class="title"><?=$curr_news['title']?></h1>

            <?php 
                $curr_date_timestamp = strtotime($curr_news['date']);
                $new_date = date('d.m.Y', $curr_date_timestamp);   
            ?>
            <p class="date"><?=$new_date?></p>

            <div class="news-content">

                    <img class="news-img" src="/img/<?php echo $curr_news['image']?>" alt="#" align="right">
                    <h2 class="news-title"><?=$curr_news['announce']?></h2>
                    <span>
                        <?php echo $curr_news['content']?>
                    </span>
                    
            </div>
            <a href="/" class="new-btn">
                <img src="/images/arrow2__.svg" alt="" class="arrow1-img">
                Назад к новостям
            </a>
        </div>
    </div>
</section>