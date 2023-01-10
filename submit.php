<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tezosWalletAddress = $_POST["tezos-wallet-address"];
    $file = fopen("form-answers.txt", "a"); 
    if (is_writable("form-answers.txt")) {
      fwrite($file, $tezosWalletAddress . "\n");
      echo "Form data saved successfully!";
    } else {
      echo "Error: File is not writable!";
    }
    fclose($file);
  }
?>