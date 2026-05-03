<?php
 Page::open();
  Row::open(["g"=>"3"]);
  //Col1
   Col::open(["col"=>4]);
    Card::open(["title"=>"Orders","class-title"=>"text-light","class-head"=>"bg bg-success","class-body"=>"bg bg-light text-success fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
         echo Order::count();
    Card::close();
   Col::close();

  //Col2
   Col::open(["col"=>4]);
   Card::open(["title"=>"Purchase","class-title"=>"text-light","class-head"=>"bg bg-danger","class-body"=>"bg bg-light text-danger fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
   echo Purchase::count();
   Card::close();
  Col::close();


  //Col3
  Col::open(["col"=>4]);
  Card::open(["title"=>"Customer","class-title"=>"text-light","class-head"=>"bg bg-warning","class-body"=>"d-flex justify-content-center align-items-center fs-5 fw-bolder text-warning"]);
  echo Customer::count();
  Card::close();
 Col::close();
 
 Row::close();

 Row::open(["g"=>"3"]);

 Col::open(["col"=>4]);
 Card::open(["title"=>"Inventory","class-title"=>"text-light","class-head"=>"bg bg-dark","class-body"=>"bg bg-light text-danger fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
 echo Product::count();
 Card::close();
Col::close();

Col::open(["col"=>4]);
 Card::open(["title"=>"Account","class-title"=>"text-light","class-head"=>"bg bg-info","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
 echo "345";
 Card::close();
Col::close();

Col::open(["col"=>4]);
 Card::open(["title"=>"Company","class-title"=>"text-light","class-head"=>"bg bg-primary","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
 echo Company::count();
 Card::close();
Col::close();
  
  Row::close();


  Row::open(["g"=>"3"]);
  //Col1
   Col::open(["col"=>4]);
    Card::open(["title"=>"Sales","class-title"=>"text-light","class-head"=>"bg bg-success","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
         echo Order::total_sale();
    Card::close();
   Col::close();

  //Col2
   Col::open(["col"=>4]);
   Card::open(["title"=>"Stock","class-title"=>"text-light","class-head"=>"bg bg-danger","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
   echo Stock::count();
   Card::close();
  Col::close();
  //Col3
  Col::open(["col"=>4]);
  Card::open(["title"=>"Product","class-title"=>"text-light","class-head"=>"bg bg-dark","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
  echo Product::count();
  Card::close();
 Col::close();
 //Col4
 

  
  Row::close();

 Page::close();
?>