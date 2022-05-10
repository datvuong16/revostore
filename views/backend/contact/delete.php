<?php

use App\Models\contact;

$contact = new Contact(); // Tạo đối tượng

$id = $_REQUEST["id"];
$row = $contact->contact_row($id);
$contact->contact_delete($id);
header("location: index.php?option=contact&cat=trash");
