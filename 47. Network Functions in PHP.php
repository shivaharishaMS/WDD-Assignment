
<?php
echo "<h2>PHP Network Functions Example</h2>";

$hostname = "www.google.com";

$ip = gethostbyname($hostname);
echo "IP address of $hostname: $ip <br>";

$host = gethostbyaddr("8.8.8.8");
echo "Hostname of 8.8.8.8: $host <br>";

$ips = gethostbynamel($hostname);
echo "All IP addresses of $hostname: ";
print_r($ips);
echo "<br>";

$long = ip2long("127.0.0.1");
echo "IP 127.0.0.1 as long: $long <br>";
echo "Long $long back to IP: " . long2ip($long) . "<br>";

$port = getservbyname("http", "tcp");
echo "Port number for HTTP: $port <br>";

$service = getservbyport(443, "tcp");
echo "Service running on port 443: $service <br>";
?>
