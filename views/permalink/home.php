<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contoh Permalink Artikel pada CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 20px 100px 20px 100px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>


<?php
foreach($artikel->result_array() as $a)
{
	$link = set_permalink($a['id_content'],$a['judul_content']);
	echo '<a href="'.base_url().'permalink/detail/'.$link.'"><h1>'.$a['judul_content'].'</h1></a>';
	echo '<code>'.strip_tags(substr($a['content'],0,400)).'</code>';
}
?>

</body>
</html>