<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_go";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    //INPUT KOLOM DARI TABEL tb_track
    
    //add data
    public function add_data($pro_nama, $pro_harga, $pro_img,  $pro_desk, $pro_status )
    {
        $data = $this->db->prepare('INSERT INTO tb_product (pro_nama, pro_harga, pro_img, pro_desk, pro_status) VALUES (?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $pro_nama);
        $data->bindParam(2, $pro_harga);
        $data->bindParam(3, $pro_img);
        $data->bindParam(4, $pro_desk);
        $data->bindParam(5, $pro_status);


        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_product");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    } 
 
    public function get_by_id($kd_batch){
        $query = $this->db->prepare("SELECT * FROM tb_product where id_product=?");
        $query->bindParam(1, $id_product);
        $query->execute();
        return $query->fetch();
    }
 
    //update data
    public function update($id_product, $nama_product, $harga_product, $foto_product, $desk_product, $status_pro){
        $query = $this->db->prepare('UPDATE tb_product set id_product=?, nama_product=?, harga_product=?, foto_product=?, desk_product=?, status_pro=? where id_product=?');
        
        
        $query->bindParam(1, $id_product);
        $query->bindParam(2, $nama_product);
        $query->bindParam(3, $harga_product);
        $query->bindParam(4, $foto_product);
        $query->bindParam(5, $desk_product);
        $query->bindParam(5, $status_pro);


        $query->execute();
        return $query->rowCount();
    }
    //delete data
    public function delete($kd_batch)
    {
        $query = $this->db->prepare("DELETE FROM tb_product where id_product=?");
 
        $query->bindParam(1, $id_product);
 
        $query->execute();
        return $query->rowCount();
    }
    
    //search data
    public function cari($kd_batch)
    {
        $query = $this->db->prepare("SELECT * FROM tb_track where kd_batch like '%".$cari."%' ");
 
        $query->bindParam(1, $kd_batch);
 
        $query->execute();
        return $query->rowCount();
    }
}
?>