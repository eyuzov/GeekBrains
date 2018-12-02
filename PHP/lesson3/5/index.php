<?php

$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
Architecto dolorum error excepturi mollitia quas quisquam sit! 
Assumenda doloremque, dolores enim eos esse ex exercitationem fugiat fugit, 
harum incidunt, iusto maxime molestiae nemo obcaecati officia perferendis porro quae quaerat quo repellendus 
reprehenderit sint totam ut? Ab ad animi asperiores corporis deleniti dolorem eveniet fugiat laborum laudantium, 
minima molestias natus necessitatibus, neque nulla odio officia quaerat quibusdam suscipit tempore temporibus ullam, 
vero voluptatem voluptatum! Aliquid, consequatur eum fugiat magni modi nesciunt quia sit? 
Accusantium ad et illo in laudantium. 
Aspernatur dignissimos doloribus laboriosam laudantium odit quae, quidem ratione repellendus veritatis voluptas, 
voluptatibus?";

function replace($str) {
    $newStr = explode(" ", $str);
    $str = implode("_", $newStr);
    echo $str;
}

replace($str);
