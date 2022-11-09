<?php
namespace Application\Model;
class Category extends Model{
    public function all()
    {
        $query = "SELECT * FROM `categories`;";
        $result = $this->query($query)->fetchAll();
        $this->close();
        return $result;
    }
    public function articles($cat_id)
    {
        $query = "SELECT * FROM `articles` WHERE cat_id = ?";
        $result = $this->query($query,[$cat_id])->fetchAll();
        $this->close();
        return $result;
    }
    public function find($id)
    {
        $query = "SELECT * FROM `categories` WHERE id = ?";
        $result = $this->query($query,array($id))->fetch();
        $this->close();
        return $result;
    }
    public function insert($values)
    {
       $query = "INSERT INTO `categories` (`name`,`descraption`,`created_at`) VALUES (?,?,now());";
       $this->execute($query,array_values($values));
       $this->close(); 
    }
    public function update($id, $values)
    {
        $query = "UPDATE `categories` SET `name` = ?, `descraption` = ?,  `updated_at`= now()  WHERE `id` = ? ;" ;
        $this->execute($query, array_merge( array_values($values), [$id]));
        $this->close();
    }
    public function delete($id)
    {
        $query = "DELETE FROM `categories` WHERE `id` = ? ;";
        $this->execute($query, [$id]);
        $this->close();
    }
}