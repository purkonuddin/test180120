<?php
$name=$this->input->get('nama');
$age=$this->input->get('umur');
// $data=query untuk ambil data pada database berdasarkan parameter nama dan umur;
// echo json_encode($data);
$data = '
[
  {
    "id":"1",
    "name":"purkonuddin",
    "age":"25",
    "address":"pasir honje",
    "hobbies":[
      "baca",
      "nonton",
      "tidur",
    ],
    "is_married":false,
    "list_school":[
      {
        "name":"SMK Pelita Ciampea",
        "year_in":"2008",
        "year_out":"2011",
      },
      {
        "name":"AMIK BSI Jakarta",
        "year_in":"2011",
        "year_out":"2015",
      }
    ],
    "skills":[
      {
        "skill_name":"PHP",
        "level":"advanced"
      },
      {
        "skill_name":"Jquery",
        "level":"beginner"
      },
      {
        "skill_name":"CodeIgniter",
        "level":"expert"
      }
    ],
    "interest_in_coding":true,
    }
  ]

';
echo $data;
 ?>
