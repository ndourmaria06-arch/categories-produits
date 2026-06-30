<?php

// 1 

$categories = [

   0 =>      [
            "code" => "9870",
            "nom" => "categorie0",
            "produits" => [
                  0 => [
                    "nom" => "produit1",
                    "reference" => "ref1",
                    "prix" => 3000,
                    "quantite" => 10
                  ],
                  1 => [
                    "nom" => "produit2",
                    "reference" => "ref2",
                    "prix" => 2000,
                    "quantite" => 15
                  ]
            ]
         ],
   1 =>      [
            "code" => "coo1",
            "nom" => "categorie1",
            "produits" => []
         ]
];







//2: affichage des catégories qui n'ont pas de produits

  foreach ($categories as  $categorie ) {
    if (empty($categorie["produits"])) {
         echo $categorie["nom"]."\n";
    }
 }







 //3: enregistrer une nouvelle categorie

    $codeIsValid = true;
    
   do { 
        
        $code = readline("saisir le code :");
        if (empty($code)) {
            echo "le code est obligatoire \n";
             $codeIsValid = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["code"]) === $code) {
                $codeIsValid = false;
                echo "le code existe deja ...\n"; 
         }
       }  
}
        

    } while (!$codeIsValid);
    
     $nomIsValid = true;
  do { 
        
        $nom = readline("saisir le nom : ");
        if (empty($nom)) {
            echo "le nom est obligatoire";
             $nomIsValid= false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["nom"]) === $nom) {
                $nomIsValid = false;
                echo "le nom existe deja ..."; 
         }
       }  
}
    } while (!$nomIsValid);



    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

         $categories[] = $categorie;







         // 4:ajouter une produit a une catégorie
         
           $categorieExiste =  false;
          $code = readline("saisir le code :");
             foreach ($categories as $index => $categorie ) {
               if (($categorie["code"]) === $code) {
                    $categorieExiste = true;
                    break;
         }
       } 
        
        if ($categorieExiste) {
      
        $nomIsValid = true;
        do { 
            
            $nom = readline("saisir le nom : ");
            if (empty($nom)) {
                echo "le nom est obligatoire";
                $nomIsValid= false;
            }else{
                foreach ($categories as  $categorie ) {
                    if (($categorie["nom"]) === $nom) {
                        $nomIsValid = false;
                        echo "le nom existe deja ..."; 
                    }
                }  
            }
        } while (!$nomIsValid);   


        $refIsValid = true;
        do { 
            
            $nom = readline("saisir la reference : ");
            if (empty($reference)) {
                echo "la reference est obligatoire";
                $refIsValid= false;
            }else{
                foreach ($categories as  $categorie ) {
                    if (($categorie["reference"]) === $reference) {
                        $refIsValid = false;
                        echo "la reference existe deja ..."; 
                    }
                }  
            }
        } while (!$refIsValid);  

        do {
            $prix = (int)readline("saisir le prix : ");
        } while ($prix >= 0);
        
        
        do {
            $quantite = (int)readline("saisir la quantite : ");
        } while ($quantite >= 0);
          

        $produit =   [
            "nom" => $nom,
            "reference" => $reference,
            "prix" => $prix,
            "quantité" => $quantite
        ] ;

        $categories[$index]["produits"][] = $produit;
}else {
        echo " désolé , la categorie n'existe pas...";
}
        
