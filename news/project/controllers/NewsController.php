<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\News;
	
	class NewsController extends Controller
	{
		public function main($params) {
            $this->title = 'Галактический вестник';
            $number_of_news_per_page=4;                                                         //сколько хотим выводить новостей на главной странице

			$news = new News; 
            $all_number=$news->getNumberOfNews();                                               //узнаем общее количество новостей в бд

            $number_of_pages=$news->numberOfPages($all_number, $number_of_news_per_page);       //вычисляем общее количество страниц

            $curr_page=1;                                                                       //определяем текущую страницу
            if(isset($params['page'])) $curr_page=$params['page'];

            if($curr_page>$number_of_pages) header('Location: '.'/error');                      //некорректный url

            $the_latest_news=$news->getTheLatestNews();                                         //получаем самую последнюю новость для банера

            $list_of_news_for_curr_page=$news->getListOfNewsForCurrPage($curr_page, $number_of_news_per_page);      //получаем список новостей для текущей страницы
			
			return $this->render('news/main', ['the_latest_news' => $the_latest_news, 'list_of_news_for_curr_page' => $list_of_news_for_curr_page, 'curr_page' => $curr_page, 'number_of_pages' => $number_of_pages]);
		}

        public function newsPage($params) {
            $this->title = 'Галактический вестник: новости';
            $news = new News; 

            $news_id=1;                                                                       //определяем текущую новость
            if(isset($params['id'])) $news_id=$params['id'];

            $curr_news=$news->getById($news_id);
            if($curr_news)  return $this->render('news/newspage', ['curr_news' => $curr_news]);     //проверяем, нашлось ли что-нибудь в бд
            else{
                header('Location: '.'/error');
                return null;
            }
            
        }
	}