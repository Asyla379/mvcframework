<?php

class Model{

    use Database;

    protected $table ='users'; 
    protected $limit =10; 
    protected $offset =0; 

    function test(){
        $query = "select * from users";

        $result = $this->query($query);
        show($result);
    }
    public function where($data,$data_not=[]){

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query="select *from $this->table where";


        foreach($keys as $key){
            $query .= $key . "=:" . $key . "&&";
        }

        foreach($keys_not as $key){
            $query .= $key . "!=:" . $key . "&&";
        }

        $query=trim($query, "&&");

        $query .="select *from $this->table where id = :id && date =now() && id !=:id";

        $query .= "limit $this->limit offsert $this->offset";
        $this->query($query,['id'=>23]);
    }
    public function first($data,$data_not=[]){
    }
    public function insert($data){
    }
    public function update($id,$data,$id_column='id'){

    }
    public function delete($id,$id_column='id'){

    }

}