<?php
  if($_POST["message"])
  {
    // TODO: replace this with captcha
    if (true)
    {
        /*
        - requesterName
        - attorneyName
        - firmName
        - address1
        - address2
        - phoneNumber
        - email
        - caseName
        - caseNumber
        - date
        - time
        - locationInformation -- NOTE: This is a radio with multiple choices that I didn't put in yet. I will need to look more into this. 
        - proceedingDeponents
        - estimatedLength
        - comments
        */
      // depos@justwritecr.com
      mail("softwaredev@alexanderneville.com",
        "NEW DEPOSITION SCHEDULING REQUEST",
        // Message
        "Requester Name: " . $_POST["requesterName"] . "\n"
        . "Attorney Name: " . $_POST["attorneyName"] . "\n"
        . "Firm Name: " . $_POST["firmName"] . "\n"
        . "Address Line 1: " . $_POST["address1"] . "\n"
        . "Address Line 2: " . $_POST["address2"] . "\n"
        . "Phone Number: " . $_POST["phoneNumber"] . "\n"
        . "Email: " . $_POST["email"] . "\n"
        . "Case Name: " . $_POST["caseName"] . "\n"
        . "Case Number: " . $_POST["caseNumber"] . "\n"
        // Date TBD
        // Time TBD
        // Location Info TBD
        . "Proceeding Deponents: " . $_POST["proceedingDeponents"] . "\n"
        . "Estimated Length: " . $_POST["estimatedLength"] . "\n"
        . "Comments: " . $_POST["comments"] . "\n"
        , 
        "From: " . $_POST["requesterName"] . ", " . $_POST["email"]);

      echo '<script type="text/JavaScript">
        window.alert("Scheduling request sent successfully.");
        </script>';

      echo '<script type="text/JavaScript">
        window.location = document.referrer;
        </script>';

      exit;
    }
    else
    {
      echo '<script type="text/JavaScript">
        window.alert("Scheduling request failed.");
        </script>';

      echo '<script type="text/JavaScript">
        window.location = document.referrer;
        </script>';

      exit;
    }
  }
?>
