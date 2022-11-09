<?php
namespace Application\Model;
class Article extends Model{
    public function all()
    {
        $query = "SELECT * FROM `articles`;";
        $result = $this->query($query)->fetchAll();
        $this->close();
        return $result;
    }
    public function find($id)
    {
        $query = "SELECT *, (SELECT `name` FROM `categories` WHERE `categories`.`id` = `articles`.`cat_id`) as `category` FROM `articles` WHERE id = ? ";
        $result = $this->query($query, [$id])->fetch();
        $this->close();
        return $result;
    }
    public function store($values)
    {
        $query = "INSERT INTO `articles` (`title`,`cat_id`,`body`,`created_at`) VALUES (?,?,?,now());";
        $this->execute($query,array_values($values));
        $this->close();
    }
    public function update($id,$values)
    {
        $query = "UPDATE `articles` SET `title` = ?, `cat_id` = ?,  `body` = ?,  `updated_at`= now()  WHERE `id` = ? ;";
        $this->execute($query, array_merge(array_values($values), [$id]));
        $this->close();
    }
    public function delete($id)
    {
        $query = "DELETE FROM `articles` WHERE `id` = ? ;";
        $this->execute($query, [$id]);
        $this->close();
    }
}