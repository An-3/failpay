<?php   
class Trans_model extends CI_Model {   
 
    function Failpay_model()   
    {   
        // Вызов конструктора  
        parent::CI_Model();   
    }   
 
    function getData()   
        {   
            //Выбираем все данные из таблицы tdata  
            $query = $this->db->get('transactions'); 
            //Возвращаем результат   
            return $query->result();      
        }   
 
}   
?>