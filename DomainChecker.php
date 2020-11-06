
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<h3>Custom domain checker - Check Domain Available</h3>
<hr style="background-color:#ff0000">
<form action="" method="post" name="domain">
	<div class="input-group mb-4">
		<input type="text" class="form-control" name="domainname" placeholder="Enter Domain with no .com, ex: example" aria-label="only domain name">
		<div class="input-group-append">
			<button class="btn btn-primary" name="submitBtn" type="submit">Check Available</button>
		</div>
	</div>
</form>

<?php
$TLDz = array('.com','.net','.org','.info', '.cc', '.co.uk', '.xyz', '.online', '.club', '.live',
		'.site', '.me', '.tech', '.shop', '.vip', '.website', '.biz', '.store', '.app', '.life', '.pro', '.asia', '.world',
		'.today', '.tv', '.group', '.io', '.studio', '.agency', '.work', '.news', '.dev', '.ws',
		'.mobi', '.cloud', '.design', '.global', '.company', '.solutions', '.kw', '.fr', '.ir');
function checkDomain($domain,$server,$randomTLD){$con = fsockopen($server, 43);
	if (!$con) return false;fputs($con, $domain."\r\n");$response = ' :';while(!feof($con)){$response .= fgets($con,128);}fclose($con);
	if (strpos($response, $randomTLD)){return true;}else{return false;}}

function showDomainResult($domain,$server,$randomTLD){
	if (checkDomain($domain,$server,$randomTLD)){
		echo '<tr>
		<td class="text-success">'.$domain.'</td>
		<td class=""><span class="badge outline-badge-info shadow-none">AVAILABLE</span></td>
		<td><a href="https://viewdns.info/iphistory/?domain='.$domain.'">View Dns</a></td>
		<td><a href="https://securitytrails.com/domain/'.$domain.'">Security Trails</a></td>
		</tr>
		';
	}else{
		echo '<tr>
		<td class="text-danger">'.$domain.'</td>
		<td class=""><span class="badge outline-badge-danger shadow-none">TAKEN</span></td>
		<td><a href="https://viewdns.info/iphistory/?domain='.$domain.'">View Dns</a></td>
		<td><a href="https://securitytrails.com/domain/'.$domain.'">Security Trails</a></td>
		</tr>
		';
	}
}
echo '<table id="zero-config" class="table table-hover" style="width:100%">
<caption>List of all AVAILABLE and NOT AVAILABLE</caption>
<thead>
<tr>
<th>Domain</th>
<th class="">Status</th>
<th>ViewDns</th>
<th>SecurityTrails</th>
</tr>
</thead>
<tbody>';
if (isset($_POST['submitBtn'])){
$domainbase = (isset($_POST['domainname'])) ? $_POST['domainname'] : '';
if (strlen($domainbase)>1){
foreach ($TLDz as $key => $value){showDomainResult($domainbase.$value,'whois.crsnic.net','No match for');};}}
echo '</tbody></table>';
?>
