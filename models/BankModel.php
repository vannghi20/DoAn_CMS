<?php

require_once 'BaseModel.php';

class BankModel extends BaseModel {
 
    public function findBankById($id) {
        $sql = 'SELECT * FROM banks WHERE id = '.$id;
        $bank = $this->select($sql);

        return $bank;
    }
    public function Bank() {
        $sql = 'SELECT `banks`.`id`,`banks`.`user_id`,`users`.`fullname`, `banks`.`cost`, `banks`.`version` 
        FROM `banks` INNER JOIN `users` WHERE `banks`.`user_id` = `users`.`id`';
        $bank = $this->select($sql);
        return $bank;
    } 

    /**
     * Authentication bank
     * @param $bankName
     * @param $password
     * @return array
     */

    /**
     * Delete bank by id
     * @param $id
     * @return mixed
     */
    public function deletebankById($id) {
        $sql = 'DELETE FROM banks WHERE id = '.$id;
        return $this->delete($sql);

    }

    /**
     * Update bank
     * @param $input
     * @return mixed
     */
    public function updatebank($input) {
        $sql = 'UPDATE banks SET 
                 user_id = "' . $input['user_id'] .'", 
                 cost ="' . $input['cost'] .'",                 
                 version = version + 0.1
                WHERE id = ' . $input['id'];
        $bank = $this->update($sql);
        return $bank;
    }

    /**
     * Insert bank
     * @param $input
     * @return mixed
     */
    public function insertbank($input) {
        $sql = "INSERT INTO `app_web1`.`banks` (`user_id`, `cost`) VALUES (" .
        "'" . $input['user_id'] ."', '".($input['cost'])."')";

        $bank = $this->insert($sql);

        return $bank;
    }

    /**
     * Search banks
     * @param array $params
     * @return array
     */
    public function getBanks($params = []) {
        //Keyword
        if (!empty($params['keyword'])) {
            $sql = 'SELECT `banks`.`id`,`banks`.`user_id`,`users`.`fullname`, `banks`.`cost`, `banks`.`version` 
            FROM `banks` INNER JOIN `users` WHERE `banks`.`user_id` = `users`.`id` 
            AND name LIKE "%' . $params['keyword'] .'%"';
            //Keep this line to use Sql Injection
            //Don't change
            //Example keyword: abcef%";TRUNCATE banks;##
            $banks = self::$_connection->multi_query($sql);
        } else {
            $sql = 'SELECT `banks`.`id`,`banks`.`user_id`,`users`.`fullname`, `banks`.`cost`, `banks`.`version` 
            FROM `banks` INNER JOIN `users` WHERE `banks`.`user_id` = `users`.`id`';
            $banks = $this->select($sql);
        }

        return $banks;
    }
}