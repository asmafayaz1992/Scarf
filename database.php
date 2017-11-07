XML to MySQL and Read the MySQL Data
$xmlDoc = new DOMDocument();
$xmlDoc->load("productdata.xml");
$mysql_hostname = "localhost"; // Example : localhost
$mysql_user = "asmafayaz";
$mysql_password = "mi@45qtdy";
$mysql_database = "asma_fayaz";

$dbh = new PDO("mysql:dbname={$mysql_database};host={$mysql_hostname};port=3306", $mysql_user, $mysql_password);

$xmlObject = $xmlDoc->getElementsByTagName('productdata');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
   $website_id = $xmlObject->item($i)->getElementsByTagName('website_id')->item(0)->childNodes->item(0)->nodeValue;
   $sku = $xmlObject->item($i)->getElementsByTagName('sku')->item(0)->childNodes->item(0)->nodeValue;
     $manufacturer = $xmlObject->item($i)->getElementsByTagName('manufacturer')->item(0)->childNodes->item(0)->nodeValue;
   $model = $xmlObject->item($i)->getElementsByTagName('model')->item(0)->childNodes->item(0)->nodeValue;
     $model_additional = $xmlObject->item($i)->getElementsByTagName('model_additional')->item(0)->childNodes->item(0)->nodeValue;
   $hdd = $xmlObject->item($i)->getElementsByTagName('hdd')->item(0)->childNodes->item(0)->nodeValue;
     $hdd_type = $xmlObject->item($i)->getElementsByTagName('hdd_type')->item(0)->childNodes->item(0)->nodeValue;
   $chassis = $xmlObject->item($i)->getElementsByTagName('chassis')->item(0)->childNodes->item(0)->nodeValue;
     $colour = $xmlObject->item($i)->getElementsByTagName('colour')->item(0)->childNodes->item(0)->nodeValue;
   $memory = $xmlObject->item($i)->getElementsByTagName('memory')->item(0)->childNodes->item(0)->nodeValue;
     $total_memory = $xmlObject->item($i)->getElementsByTagName('total_memory')->item(0)->childNodes->item(0)->nodeValue;
   $graphics = $xmlObject->item($i)->getElementsByTagName('graphics')->item(0)->childNodes->item(0)->nodeValue;
     $qty = $xmlObject->item($i)->getElementsByTagName('qty')->item(0)->childNodes->item(0)->nodeValue;
   $category = $xmlObject->item($i)->getElementsByTagName('category')->item(0)->childNodes->item(0)->nodeValue;
     $cpu = $xmlObject->item($i)->getElementsByTagName('cpu')->item(0)->childNodes->item(0)->nodeValue;
   $cpu_count = $xmlObject->item($i)->getElementsByTagName('cpu_count')->item(0)->childNodes->item(0)->nodeValue;
        $generation = $xmlObject->item($i)->getElementsByTagName('generation')->item(0)->childNodes->item(0)->nodeValue;
   $series = $xmlObject->item($i)->getElementsByTagName('series')->item(0)->childNodes->item(0)->nodeValue;
     $ram_upgrade = $xmlObject->item($i)->getElementsByTagName('ram_upgrade')->item(0)->childNodes->item(0)->nodeValue;
   $hdd_upgrade = $xmlObject->item($i)->getElementsByTagName('hdd_upgrade')->item(0)->childNodes->item(0)->nodeValue;
     $screensize = $xmlObject->item($i)->getElementsByTagName('screensize')->item(0)->childNodes->item(0)->nodeValue;
   $price = $xmlObject->item($i)->getElementsByTagName('price')->item(0)->childNodes->item(0)->nodeValue;
     $cost = $xmlObject->item($i)->getElementsByTagName('cpu')->item(0)->childNodes->item(0)->nodeValue;
        $mpn = $xmlObject->item($i)->getElementsByTagName('colour')->item(0)->childNodes->item(0)->nodeValue;
   $asin = $xmlObject->item($i)->getElementsByTagName('asin')->item(0)->childNodes->item(0)->nodeValue;
     $ean = $xmlObject->item($i)->getElementsByTagName('ean')->item(0)->childNodes->item(0)->nodeValue;
   $ean_id = $xmlObject->item($i)->getElementsByTagName('ean_id')->item(0)->childNodes->item(0)->nodeValue;
     $brand = $xmlObject->item($i)->getElementsByTagName('brand')->item(0)->childNodes->item(0)->nodeValue;
   $attribute_set = $xmlObject->item($i)->getElementsByTagName('attribute_set')->item(0)->childNodes->item(0)->nodeValue;
     $description = $xmlObject->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
        $image = $xmlObject->item($i)->getElementsByTagName('image')->item(0)->childNodes->item(0)->nodeValue;
   $name = $xmlObject->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
     $amazonName = $xmlObject->item($i)->getElementsByTagName('amazonName')->item(0)->childNodes->item(0)->nodeValue;
   $amz_bullet1 = $xmlObject->item($i)->getElementsByTagName('amz_bullet1')->item(0)->childNodes->item(0)->nodeValue;
     $amz_bullet2 = $xmlObject->item($i)->getElementsByTagName('amz_bullet2')->item(0)->childNodes->item(0)->nodeValue;
   $amz_bullet3 = $xmlObject->item($i)->getElementsByTagName('amz_bullet3')->item(0)->childNodes->item(0)->nodeValue;
     $amz_bullet4 = $xmlObject->item($i)->getElementsByTagName('amz_bullet4')->item(0)->childNodes->item(0)->nodeValue;
        $amz_bullet5 = $xmlObject->item($i)->getElementsByTagName('amz_bullet5')->item(0)->childNodes->item(0)->nodeValue;
   $amz_node = $xmlObject->item($i)->getElementsByTagName('amz_node')->item(0)->childNodes->item(0)->nodeValue;
     $ebay_category = $xmlObject->item($i)->getElementsByTagName('ebay_category')->item(0)->childNodes->item(0)->nodeValue;
   $ebay_store_category = $xmlObject->item($i)->getElementsByTagName('ebay_store_category')->item(0)->childNodes->item(0)->nodeValue;
    
   $sql = $dbh->prepare("INSERT INTO `asma_table_name` (`website_id`, `sku`, `manufacturer`, `model`, `model_additional`, `hdd`, `hdd_type`, `chassis`, `colour`, `memory`, `total_memory`, `graphics`, `qty`, `category`,`cpu`, `cpu_count`, `generation`, `series`, `ram_upgrade`, `hdd_upgrade`, `screensize`, `price`, `cost`, `mpn`, `asin`, `ean`, `ean_id`, `brand`, `attribute_set`, `description`, `image`, `name`, `amazonName`, `amz_bullet1`, `amz_bullet2`, `amz_bullet3`, `amz_bullet4`,`amz_bullet5`, `amz_node`, `ebay_category`, `ebay_store_category`) VALUES (?, ?)");
   $sql->execute(array(
     $website_id
     $sku
	  $manufacturer
     $model
	  $model_additional
     $hdd
	  $hdd_type
     $chassis
	  $colour
     $memory
	  $total_memory
     $graphics
	  $qty
     $category
	  $cpu
     $cpu_count
	  $generation
     $series
	  $ram_upgrade
     $hdd_upgrade
	  $screensize
     $price
	  $cost
     $mpn
	  $asin
     $ean
	  $ean_id
     $brand
	  $attribute_set
     $description
	  $image
     $name
	  $amazonName
     $amz_bullet1
	  $amz_bullet2
     $amz_bullet3
	  $amz_bullet4
     $amz_bullet5
	  $amz_node
     $ebay_category
	  $ebay_store_category
   ));
   print "Finished Item<br/>",
   print "$website_id</br>",
   print "$sku"</br>",
   print "$manufacturer"</br>",
   print "$model"</br>",
   print "$model_additional"</br>",
   print "$hdd"</br>",
   print "$model_additional"</br>",
   print "$hdd"</br>",
   print "$hdd_type"</br>",
   print "$chassis"</br>",
   print "$colour"</br>",
   print "$memory"</br>",
   print "$total_memory"</br>",
   print "$graphics"</br>",
   print "$qty"</br>",
   print "$category"</br>",
   print "$cpu"</br>",
   print "$cpu_count"</br>",
   print "$generation"</br>",
   print "$series"</br>",
   print "$ram_upgrade"</br>",
   print "$hdd_upgrade"</br>",
   print "$screensize"</br>",
   print "$price"</br>",
   print "$cost"</br>",
   print "$mpn"</br>",
   print "$asin"</br>",
   print "$ean"</br>",
   print "$ean_id"</br>",
   print "$brand"</br>",
   print "$attribute_set"</br>",
   print "$description"</br>",
   print "$image"</br>",
   print "$name"</br>",
   print "$amazonName"</br>",
   print "$amz_bullet1"</br>",
   print "$amz_bullet2`"</br>",
   print "$amz_bullet3"</br>",
   print "$amz_bullet4"</br>",
   print "$amz_bullet5"</br>",
   print "$amz_node"</br>",
   print "$ebay_category"</br>",
   print "$ebay_store_category"</br>";

}