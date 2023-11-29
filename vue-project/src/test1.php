$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://coronation.api.crm4.dynamics.com/api/data/v9.2/accounts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
 "new_customerid" : "'.$input['customerID'].'",
    "name" : "'.$input['name'].'",
    "createdon" : "'.$input['createdDate'].'",
    "cr4ce_dateofbirth" : "'.$input['birthday'].'",
    "telephone1" : "'.$input['phone'].'",
    "modifiedon" : "'.$input['lastUpdateDate'].'",
    "new_email" : "'.$input['email'].'",
    "address2_name" : "'.$input['address'].'",
    "cr4ce_occupation" : "'.$input['occupation'].'",
    "new_bvn" : "'.$input['customerBVN'].'",
    "cr4ce_clientsource" : "'.$input['clientSource'].'",
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6IjlHbW55RlBraGMzaE91UjIybXZTdmduTG83WSIsImtpZCI6IjlHbW55RlBraGMzaE91UjIybXZTdmduTG83WSJ9.eyJhdWQiOiJodHRwczovL2Nvcm9uYXRpb24uY3JtNC5keW5hbWljcy5jb20vIiwiaXNzIjoiaHR0cHM6Ly9zdHMud2luZG93cy5uZXQvZDg0YTkwMTQtNzEwZC00YTlkLTg5MDEtYzI2YTRkMmYyNDY3LyIsImlhdCI6MTcwMDU1MTA5MywibmJmIjoxNzAwNTUxMDkzLCJleHAiOjE3MDA1NTY2NTEsImFjY3QiOjAsImFjciI6IjEiLCJhaW8iOiJBVlFBcS84VkFBQUFmY0dZQnNRaTROWmFYQW9XMDFUeHhhWEU1TEE0R2tRWmVyQlBKK0ZBTjZ2eEw0VWFSb1JPZG5yUXQ3QTlxWkVFZHNEQTZSVnN6Q29LTERJUVl3TDhXdFRFWW1QQytUQTh3VXMzZ3dOVjFlZz0iLCJhbXIiOlsicHdkIiwibWZhIl0sImFwcGlkIjoiMWFhYTU4NTktZTg4OC00MWQwLTkwOTctYzhmNWU3MjZjYzYwIiwiYXBwaWRhY3IiOiIwIiwiZmFtaWx5X25hbWUiOiJDWCIsImdpdmVuX25hbWUiOiJDdXN0b21lciBFeHBlcmllbmNlIiwiaXBhZGRyIjoiMTk3LjIxMS41OC4xMDgiLCJsb2dpbl9oaW50IjoiTy5DaVJqWVRnNU9UQmtPQzB6WmpOakxUUTBaVEl0WWpaa1ppMWlaVE16TmpnNE5UTmlaakVTSkdRNE5HRTVNREUwTFRjeE1HUXROR0U1WkMwNE9UQXhMV015Tm1FMFpESm1NalEyTnhvV1ExaERVazFBWTI5eWIyNWhkR2x2Ym1GdExtTnZiU0MwQVE9PSIsIm5hbWUiOiJDdXN0b21lciBFeHBlcmllbmNlIENYIiwib2lkIjoiY2E4OTkwZDgtM2YzYy00NGUyLWI2ZGYtYmUzMzY4ODUzYmYxIiwicHVpZCI6IjEwMDMyMDAyRjA4NkI5QzIiLCJyaCI6IjAuQVNFQUZKQksyQTF4blVxSkFjSnFUUzhrWndjQUFBQUFBQUFBd0FBQUFBQUFBQUFoQUc4LiIsInNjcCI6InVzZXJfaW1wZXJzb25hdGlvbiIsInN1YiI6IkdJbHdYQ09qN09HQkJoNUtwY3RWNGNtck15cGIxMnpsNUlWTGd3YnhvZjQiLCJ0ZW5hbnRfcmVnaW9uX3Njb3BlIjoiQUYiLCJ0aWQiOiJkODRhOTAxNC03MTBkLTRhOWQtODkwMS1jMjZhNGQyZjI0NjciLCJ1bmlxdWVfbmFtZSI6IkNYQ1JNQGNvcm9uYXRpb25hbS5jb20iLCJ1cG4iOiJDWENSTUBjb3JvbmF0aW9uYW0uY29tIiwidXRpIjoiWlBERmstUjFaRW1RdnB5Q19fLVRBQSIsInZlciI6IjEuMCIsInhtc19jYWUiOiIxIn0.NriaP5JpywyuxiIt-x1xjIO1fUE26PXPkfGZTdQ1g8bd53JLyZ12gcnAMHAWkUxMBBglR8pZDCTL0i9SnhV7cLW-m8eG5tEGQoozA168r4bZgak07xmBIHxoYjiowfEF6XE9l3OkrmXfVjEK9DciR01r8CKmLItPxuOV9QwiGNSXhZ76e0Uy3UZBjor6CL-ekFAXvXLEaAWVzTSu38Fs1Hx08sz3we2kOD2G9MAkJVyE0tM3P9qhwXOTn6xcRxRwnlRFlrAPoFy1Oqn_T1xESjbJ5Z_RvdDdanah4En-y9E4PxxaIEpEkPVnqCGedzNKT9eSkyu07i29OFyMlCak8g',
    'Cookie: ARRAffinity=d07849e4c942010c47b8fe0581560f302814b2a901fa91db9661e3bd150e799a5ab954b42cfa12ad9f33ddc80a07e15dd633bd57139a65479392e46e5242529408DBEA664AFD308399249120; ReqClientId=9581eef6-22b4-477c-b017-2b2df64f4b3f; orgId=ca811caf-abc5-493c-9479-b607b0a961ba'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//$response = json_decode($response,true);
if (empty($response)){
  $response = [];
}else{
  $response = [json_decode($response,true),$input];
  //$response = [];
}