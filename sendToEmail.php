<?php
    if ($_POST["g-recaptcha-response"])
    {
        mail("depos@justwritecr.com",
            "NEW DEPOSITION SCHEDULING REQUEST",
            "Requester Name: " . $_POST["requesterName"] . "\n"
            . "Attorney Name: " . $_POST["attorneyName"] . "\n"
            . "Firm Name: " . $_POST["firmName"] . "\n"
            . "Address Line 1: " . $_POST["address1"] . "\n"
            . "Address Line 2: " . $_POST["address2"] . "\n"
            . "Phone Number: " . $_POST["phoneNumber"] . "\n"
            . "Email: " . $_POST["email"] . "\n"
            . "Case Name: " . $_POST["caseName"] . "\n"
            . "Case Number: " . $_POST["caseNumber"] . "\n"
            . "Date: " . $_POST["date"] . "\n"
            . "Time: " . $_POST["time"] . "\n"
            . "Location: " . $_POST["locationInformation"] . "\n"
            . "Additional Location Details, if any: " . $_POST["locationSpecific"] . "\n"
            . "Proceeding Deponents: " . $_POST["proceedingDeponents"] . "\n"
            . "Estimated Length: " . $_POST["estimatedLength"] . "\n"
            . "Comments: " . $_POST["comments"] . "\n",
            "From: " . $_POST["requesterName"] . ", " . $_POST["email"]);

        mail($_POST["email"], 
            "Deposition Scheduled",
            "Your deposition schedule request has been created online. We are currently processing your request. Details: \n\n" . 
            "Requester Name: " . $_POST["requesterName"] . "\n"
            . "Attorney Name: " . $_POST["attorneyName"] . "\n"
            . "Firm Name: " . $_POST["firmName"] . "\n"
            . "Address Line 1: " . $_POST["address1"] . "\n"
            . "Address Line 2: " . $_POST["address2"] . "\n"
            . "Phone Number: " . $_POST["phoneNumber"] . "\n"
            . "Email: " . $_POST["email"] . "\n"
            . "Case Name: " . $_POST["caseName"] . "\n"
            . "Case Number: " . $_POST["caseNumber"] . "\n"
            . "Date: " . $_POST["date"] . "\n"
            . "Time: " . $_POST["time"] . "\n"
            . "Location: " . $_POST["locationInformation"] . "\n"
            . "Additional Location Details, if any: " . $_POST["locationSpecific"] . "\n"
            . "Proceeding Deponents: " . $_POST["proceedingDeponents"] . "\n"
            . "Estimated Length: " . $_POST["estimatedLength"] . "\n"
            . "Comments: " . $_POST["comments"] . "\n",
            "From Just Write Court Reporters, depos@justwritecr.com.");
            
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
            window.alert("Schedule request failed.");
            </script>';

        echo '<script type="text/JavaScript">
            window.location = document.referrer;
            </script>';

      exit;
    }
?>
