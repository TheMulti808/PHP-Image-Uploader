local domain = "your_domain.com"

exports['screenshot-basic']:requestScreenshotUpload('http://'..domain..'/upload/upload.php','files[]', function(data)
	local resp = json.decode(data)
	print('Link to your screenshot: '..resp.files[1].url)
end)