<!-- Даниил Сергеевич, я сделал чтение из файла txt, с разделителем ТАВ. 
     Из файла csv на странице отображаются не все значения. Так и не могу понять в чем причина. 
	 Буду благодарен, если подскажете.
     Приложены файлы "price.txt" и "Price.csv"	-->

<!DOCTYPE html>
<html>
<head>
<title>Прайс-лист</title>
<meta charset="utf-8">
<meta lang="ru">
<meta name="autor" content="Pavel">
</head>
<body>
<price_list>
   <header_list>
      <name>Наименование</name><price>Цена</price><currency>Валюта</currency><remains>Остаток на складе</remains>
   </header_list>
<?php
if (($file = fopen("price.txt","r")) !== FALSE) 
   {
     while (($str = fgetcsv($file,1000,"\t"))!== FALSE) 
	     {?> 
		      <line>
                    <name><?php echo iconv(mb_detect_encoding($str[0]),"utf-8",$str[0])?></name>
					<price><?php echo iconv(mb_detect_encoding($str[1]),"utf-8",$str[1])?></price>
					<currency><?php echo iconv(mb_detect_encoding($str[2]),"utf-8",$str[2])?></currency>
					<remains><?php echo iconv(mb_detect_encoding($str[3]),"utf-8",$str[3])?></remains>
              </line> 
		   <?php
          }
    fclose($file);
  }
?>
</body>
</html>