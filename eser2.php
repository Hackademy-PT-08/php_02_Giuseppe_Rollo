<?PHP
//esercizio 1

// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'ML'],
//     ['name' => 'Pippo', 'surname' => 'Cariola', 'gender' => 'ML'],
//     ['name' => 'Varla', 'surname' => 'Cariola', 'gender' => 'FM'],
//     ['name' => 'Erica', 'surname' => 'Cariola', 'gender' => 'FM'],

//    ];
//    foreach ($users as $users) {
//      if ($users['gender']=='ML') {
//        echo "Buongiorno Sign. $users[name] $users[surname] \n" ;
       

//      }else if ($users['gender']=='FM'){
//         echo "Buongiorno Sign.ra $users[name] $users[surname] \n";

//    }
// }


// esercizio 2
// con un foreach controlliamo tutti gli elementi dell'array se lelemento è pari sommalo

// $numeri=[
//     1,2,3,4,5,6,7,8,9,10
// ];
// $tot=0;
// for ($i=0; $i < count($numeri); $i++) { 
//     if ($numeri[$i] % 2 == 0) {
//         $tot += $numeri[$i];
        
//     }
// };
// echo"$tot";

// $numeri=[
//     1,2,3,4,5,6,7,8,9,10
// ];
// $tot=0;
//  foreach ($numeri as $key => $value) {
//     if ($value % 2 ==0) {
//         $tot += $value;
//     }
//  }
// echo "$tot";



//esercio 3
//creare un array vuoto ,ciclare i fino a 100 se i==multiplo di 3 avere determinato risultatp

// for ($i=1; $i < 101; $i++) { 
    
//     if ($i % 5 ==0 && $i % 3 ==0) {
//         echo " Hacademy";
//     }elseif ($i % 5 ==0) {
//         echo " Javascript ";
//     }elseif ($i % 3 ==0) {
       
//         echo " PHP "; 
//     }else{
//         echo " $i" ;
//     }
// }