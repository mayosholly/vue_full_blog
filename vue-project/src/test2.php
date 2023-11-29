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
    "new_customerid" : "012447",
    "name" : "OLOFU, BETHEL ODU",
    "createdon" : "11/20/2023 1:54:08 PM",
    "cr4ce_dateofbirth" : "10/27/1993 12:00:00 AM",
    "telephone1" : "08063058400",
    "modifiedon" : "11/20/2023 12:00:00 AM",
    "new_email" : "OLOFUBETHEL@MY.COM",
    "address2_name" : "OFF ABU KING SHULUWA RD AKPEHE LOGO 2",
    "cr4ce_occupation" : "",
    "new_bvn" : "22221534023",
    "cr4ce_clientsource" :  "ACCESSMORE"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6IjlHbW55RlBraGMzaE91UjIybXZTdmduTG83WSIsImtpZCI6IjlHbW55RlBraGMzaE91UjIybXZTdmduTG83WSJ9.eyJhdWQiOiJodHRwczovL2Nvcm9uYXRpb24uY3JtNC5keW5hbWljcy5jb20vIiwiaXNzIjoiaHR0cHM6Ly9zdHMud2luZG93cy5uZXQvZDg0YTkwMTQtNzEwZC00YTlkLTg5MDEtYzI2YTRkMmYyNDY3LyIsImlhdCI6MTcwMDIyMjM1NSwibmJmIjoxNzAwMjIyMzU1LCJleHAiOjE3MDAyMjcyODksImFjY3QiOjAsImFjciI6IjEiLCJhaW8iOiJBVlFBcS84VkFBQUFCclduTi9SZDRseEtKUEplMGEzN2JHQjdqdlhvMytKNzhJKzl3Y0ZXNjJIanVOeERzcDRaYmVGdThtcWw2eFRlY0t6QlVqWjFuaWlhL3k2cVpSVkRzNnlmSmMra0lpamV6VWgyZi81UW5rST0iLCJhbXIiOlsicHdkIiwibWZhIl0sImFwcGlkIjoiMWFhYTU4NTktZTg4OC00MWQwLTkwOTctYzhmNWU3MjZjYzYwIiwiYXBwaWRhY3IiOiIwIiwiZmFtaWx5X25hbWUiOiJDWCIsImdpdmVuX25hbWUiOiJDdXN0b21lciBFeHBlcmllbmNlIiwiaXBhZGRyIjoiMTk3LjIxMS41OC4xMDciLCJsb2dpbl9oaW50IjoiTy5DaVJqWVRnNU9UQmtPQzB6WmpOakxUUTBaVEl0WWpaa1ppMWlaVE16TmpnNE5UTmlaakVTSkdRNE5HRTVNREUwTFRjeE1HUXROR0U1WkMwNE9UQXhMV015Tm1FMFpESm1NalEyTnhvV1ExaERVazFBWTI5eWIyNWhkR2x2Ym1GdExtTnZiU0MvQVE9PSIsIm5hbWUiOiJDdXN0b21lciBFeHBlcmllbmNlIENYIiwib2lkIjoiY2E4OTkwZDgtM2YzYy00NGUyLWI2ZGYtYmUzMzY4ODUzYmYxIiwicHVpZCI6IjEwMDMyMDAyRjA4NkI5QzIiLCJyaCI6IjAuQVNFQUZKQksyQTF4blVxSkFjSnFUUzhrWndjQUFBQUFBQUFBd0FBQUFBQUFBQUFoQUc4LiIsInNjcCI6InVzZXJfaW1wZXJzb25hdGlvbiIsInN1YiI6IkdJbHdYQ09qN09HQkJoNUtwY3RWNGNtck15cGIxMnpsNUlWTGd3YnhvZjQiLCJ0ZW5hbnRfcmVnaW9uX3Njb3BlIjoiQUYiLCJ0aWQiOiJkODRhOTAxNC03MTBkLTRhOWQtODkwMS1jMjZhNGQyZjI0NjciLCJ1bmlxdWVfbmFtZSI6IkNYQ1JNQGNvcm9uYXRpb25hbS5jb20iLCJ1cG4iOiJDWENSTUBjb3JvbmF0aW9uYW0uY29tIiwidXRpIjoiRF93SV9jbGZGVXFFb3JKblUybzFBQSIsInZlciI6IjEuMCIsInhtc19jYWUiOiIxIn0.B1qjKPogi0ZSYeAyxTQzdywGbKxnPK1rSaGAmZ1bteRwJVn5Hzxork0Gfl3YrCucJUXeEDR5WysmOev7nvt370pRTBluVwjjV1WT-n9E9KOCbnwvUgruaafxhjISxdv8RJOgU5IPh_Hs8WjzuHuS0dHlA7dIlXXC608aNYPW1UPLBNlcwLAYO68bDJFl4cV6W09CET16z4pIDL-mMuAReTpJisOaJSn5VenveZ6GTgmIcmALqUtGR_8ab7oftXQWuAoTPHvspOIU8LgjOrscxc5b2v8a0ENRLKdIs0YJkol-Tzi6MOV9zuNUM0auLXD4Fi5EkPPT5C5fCpX7dHgwYg',
    'Cookie: ARRAffinity=f7e12b1999a99ee582729ad3955c346ba6b191b752357057e6e61569f8c898775ab954b42cfa12ad9f33ddc80a07e15dd633bd57139a65479392e46e5242529408DBE768104FE6A032924226; ReqClientId=9581eef6-22b4-477c-b017-2b2df64f4b3f; orgId=ca811caf-abc5-493c-9479-b607b0a961ba'
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