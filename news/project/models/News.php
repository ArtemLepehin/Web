<?php
	namespace Project\Models;
	use \Core\Model;
	
	class News extends Model
	{
        public function numberOfPages($all_number, $number_of_news_per_page)         //Возвращает общее количество страниц, необходимых для отображения новостей
        {
            return ceil($all_number / $number_of_news_per_page);
        }

        public function initialEntryNumber($curr_page, $number_of_news_per_page)    //Возвращает значение, с которого будут браться следующие 4(или $number_of_news_per_page) новости из бд
        {
            if(is_numeric($curr_page)) return ($curr_page*$number_of_news_per_page - $number_of_news_per_page);
            else {
                header('Location: '.'/error');
                return null;
            };
        }

		public function getById($id)                                                //Возвращает новость по id
		{
            if(is_numeric($id)) return $this->findOne("SELECT * FROM `news` WHERE id=$id");
            else {
                header('Location: '.'/error');
                return null;
            };
		}

        public function getNumberOfNews()                                           //Возвращает общее количество новостей
        {
            return $this->findOne("SELECT COUNT(`id`) as count FROM `news`")['count'];
        }

        public function getTheLatestNews()                                          //Возвращает последнюю(самую новую) новость
        {
            return $this->findOne("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1");
        }

        public function getListOfNewsForCurrPage($curr_page, $number_of_news_per_page)      //Возвращает список новостей для текущей страницы - 4(или $number_of_news_per_page)шт.
        {
            $initial_entry_number=$this->initialEntryNumber($curr_page, $number_of_news_per_page);
            return $this->findMany("SELECT * FROM `news` ORDER BY `date` DESC LIMIT $initial_entry_number,$number_of_news_per_page");
        }
	}
